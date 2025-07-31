<?php

namespace Theshop\ApiClient;

use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils;

class Connector
{
    private Client $httpClient;
    private string $catalog;

    public function initConnection(
        string $locale,
        string $currency,
        ?string $accessToken,
        ?string $shippingCountry,
        ?string $catalog
    ): void {
        $this->catalog = $catalog ?? config('theshop-api-client.catalog');

        $this->httpClient = new Client([
            'http_errors' => false,
            'base_uri'    => config('theshop-api-client.api_endpoint'),
            'headers'     => [
                'Accept'           => 'application/json',
                'Catalog'          => $this->catalog,
                'Token'            => config('theshop-api-client.api_key'),
                'locale'           => $locale,
                'currency'         => $currency,
                'Shipping-Country' => $shippingCountry,
                'Authorization'    => 'Bearer '.$accessToken,
            ],
        ]);
    }

    public function setLocale(string $locale): void
    {
        $config = $this->httpClient->getConfig();

        $headers = $config['headers'] ?? [];
        $headers['locale'] = $locale;

        $this->httpClient = new Client([
            'base_uri'    => $config['base_uri'],
            'http_errors' => false,
            'headers'     => $headers,
        ]);
    }

    public function setCurrency(string $currency): void
    {
        $config = $this->httpClient->getConfig();

        $headers = $config['headers'] ?? [];
        $headers['currency'] = $currency;

        $this->httpClient = new Client([
            'base_uri'    => $config['base_uri'],
            'http_errors' => false,
            'headers'     => $headers,
        ]);
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
