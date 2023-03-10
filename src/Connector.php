<?php

namespace Theshop\ApiClient;

use GuzzleHttp\Client;

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
}
