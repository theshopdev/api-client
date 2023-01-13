<?php

namespace Theshop\ApiClient;

use GuzzleHttp\Psr7\Response;
use JsonException;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Theshop\ApiClient\Enums\RequestMethodEnum;
use Theshop\ApiClient\Exceptions\APIMaintenanceException;
use Theshop\ApiClient\Exceptions\APINotFoundException;
use Theshop\ApiClient\Exceptions\APIServerException;
use Theshop\ApiClient\Exceptions\APIUnauthorizedException;

abstract class AbstractRequest
{
    protected string $method = RequestMethodEnum::GET;

    protected string $url = '';

    protected array $options = [];

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getOptions(array $additionalOptions = []): array
    {
        return array_merge($this->options, $additionalOptions);
    }

    /**
     * @throws APIMaintenanceException
     * @throws APINotFoundException
     * @throws APIServerException
     * @throws APIUnauthorizedException
     */
    public function processResponse(Response $response): ResponseDTO
    {
        if ($response->getStatusCode() === ResponseAlias::HTTP_SERVICE_UNAVAILABLE) {
            throw new APIMaintenanceException();
        }

        if ($response->getStatusCode() === ResponseAlias::HTTP_INTERNAL_SERVER_ERROR) {
            throw new APIServerException();
        }

        if ($response->getStatusCode() === ResponseAlias::HTTP_UNAUTHORIZED) {
            throw new APIUnauthorizedException();
        }

        if ($response->getStatusCode() === ResponseAlias::HTTP_UNPROCESSABLE_ENTITY) {
            try {
                return new ResponseDTO(
                    code: ResponseAlias::HTTP_UNPROCESSABLE_ENTITY,
                    data: json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR)
                );
            } catch (JsonException) {
                return new ResponseDTO(
                    code: ResponseAlias::HTTP_UNPROCESSABLE_ENTITY
                );
            }
        }

        if ($response->getStatusCode() === ResponseAlias::HTTP_NOT_FOUND) {
            throw new APINotFoundException();
        }

        try {
            return new ResponseDTO(
                code: $response->getStatusCode(),
                data: json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR)
            );
        } catch (JsonException) {
            return new ResponseDTO(
                code: $response->getStatusCode()
            );
        }
    }
}
