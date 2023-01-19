<?php

namespace Theshop\ApiClient\Requests\Customer;

use Illuminate\Support\Str;
use Theshop\ApiClient\AbstractRequest;

class CustomerOrderDetailRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/order';

    public function __construct(
        private readonly string $locale,
        private readonly string $currency,
        private readonly string $uuid,
        private readonly string $token,
    ) {
        $this->url .= '/'.$this->uuid;
        $this->options = [
            'query' => [
                'currency' => $this->currency,
                'locale'   => $this->locale,
                'uuid'     => $this->uuid,
                'token'    => $this->token,
            ],
        ];
    }
}
