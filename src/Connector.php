<?php

namespace Theshop\ApiClient;

use GuzzleHttp\Client;

class Connector
{
    private Client $httpClient;

    public function initConnection(
        string $locale,
        string $currency,
        ?string $accessToken
    ): void {
        $this->httpClient = new Client([
            'http_errors' => false,
            'base_uri'    => config('theshop-api-client.api_endpoint'),
            'headers'     => [
                'Accept'        => 'application/json',
                'Catalog'       => config('theshop-api-client.catalog'),
                'Token'         => config('theshop-api-client.api_key'),
                'locale'        => $locale,
                'currency'      => $currency,
                'Authorization' => 'Bearer '.$accessToken,
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
