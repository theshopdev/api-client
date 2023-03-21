<?php

namespace Theshop\ApiClient\Requests\Cart;

use Theshop\ApiClient\AbstractRequest;

class OrderTrackingRequest extends AbstractRequest
{
    protected string $url = 'v1/order-tracking';

    public function __construct(
        public readonly string $uuid,
        public readonly string $token,
        public readonly string $locale,
        public readonly string $currency,
    ) {
        $this->options = [
            'query' => [
                'uuid'             => $this->uuid,
                'token'            => $this->token,
                'locale'           => $this->locale,
                'currency'         => $this->currency,
            ],
        ];
    }
}
