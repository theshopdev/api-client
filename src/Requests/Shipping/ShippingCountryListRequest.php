<?php

namespace Theshop\ApiClient\Requests\Shipping;

use Theshop\ApiClient\AbstractRequest;

class ShippingCountryListRequest extends AbstractRequest
{
    protected string $url = 'v1/shipping-countries';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency
    ) {
        $this->options = [
            'query' => [
                'locale'   => $this->locale,
                'currency' => $this->currency,
            ],
        ];
    }
}
