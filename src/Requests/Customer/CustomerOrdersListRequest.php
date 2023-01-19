<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class CustomerOrdersListRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/orders';

    public function __construct(
        private readonly string $locale,
        private readonly string $currency,
    ) {
        $this->options = [
            'query' => [
                'currency' => $this->currency,
                'locale'   => $this->locale,
            ],
        ];
    }
}
