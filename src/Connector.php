<?php

namespace Theshop\ApiClient;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils;

class Connector
{
    private Client $httpClient;
    private string $catalog;
    private string $baseUri;
    private array $headers = [];

    public function initConnection(
        string $locale,
        string $currency,
        ?string $accessToken,
        ?string $shippingCountry,
        ?string $catalog
    ): void {
        $this->catalog = $catalog ?? config('theshop-api-client.catalog');
        $this->baseUri = config('theshop-api-client.api_endpoint');

        $this->headers = [
            'Accept'           => 'application/json',
            'Catalog'          => $this->catalog,
            'Token'            => config('theshop-api-client.api_key'),
            'locale'           => $locale,
            'currency'         => $currency,
            'Shipping-Country' => $shippingCountry,
            'Authorization'    => 'Bearer '.$accessToken,
        ];

        $this->httpClient = $this->buildClient();
    }

    private function buildClient(): Client
    {
        return new Client([
            'http_errors' => false,
            'base_uri'    => $this->baseUri,
            'headers'     => $this->headers,
        ]);
    }

    public function setLocale(string $locale): void
    {
        $this->headers['locale'] = $locale;

        $this->httpClient = $this->buildClient();
    }

    public function setCurrency(string $currency): void
    {
        $this->headers['currency'] = $currency;

        $this->httpClient = $this->buildClient();
    }

    public
    function send(
        AbstractRequest $request
    ): ResponseDTO {
        return $request->processResponse(
            $this->httpClient->request(
                $request->getMethod(),
                $request->getUrl(),
                $request->getOptions()
            )
        );
    }

    public function sendMultiple(array $requests): array
    {
        $promises = [];

        foreach($requests as $requestKey => $requestObject) {
            $promises[$requestKey] = $this->httpClient->requestAsync(
                $requestObject->getMethod(),
                $requestObject->getUrl(),
                $requestObject->getOptions()
            );
        }

        $responses = Utils::unwrap($promises);
        $data = [];

        foreach($requests as $requestKey => $requestObject) {
            $data[$requestKey] = $requests[$requestKey]->processResponse($responses[$requestKey]);
        }

        return $data;
    }
}
