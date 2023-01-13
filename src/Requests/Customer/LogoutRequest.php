<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class LogoutRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/logout';
    protected string $method = 'post';
}
