<?php

namespace Theshop\ApiClient\Exceptions;

use Exception;

class APITooManyRequestsException extends Exception
{
    public function __construct(string $method, string $requestUrl, array $payload)
    {
        parent::__construct(
            "{$method} {$requestUrl} " . json_encode($payload)
        );
    }
}
