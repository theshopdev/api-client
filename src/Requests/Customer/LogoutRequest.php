<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class LogoutRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/logout';
    protected string $method = RequestMethodEnum::POST;
}
