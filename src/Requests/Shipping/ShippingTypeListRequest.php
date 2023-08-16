<?php

namespace Theshop\ApiClient\Requests\Shipping;

use Theshop\ApiClient\AbstractRequest;

class ShippingTypeListRequest extends AbstractRequest
{
    protected string $url = 'v1/shipping-types';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly string $shippingCountryUuid,
        public readonly ?string $shipping_weight = null,
    ) {
        $this->options = [
            'query' => [
                'locale'   => $this->locale,
                'currency' => $this->currency,
                'country'  => $this->shippingCountryUuid,
                'shipping_weight' => $this->shipping_weight,
            ],
        ];
    }
}
