<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class MeRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/me';
}
