<?php

namespace Theshop\ApiClient\Requests\Shipping;

use Theshop\ApiClient\AbstractRequest;

class PaymentTypeForShippingTypeListRequest extends AbstractRequest
{
    protected string $url = 'v1/payment-types';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly string $shippingCountryUuid,
        public readonly string $shippingTypeUuid
    ) {
        $this->options = [
            'query' => [
                'locale'   => $this->locale,
                'currency' => $this->currency,
                'country'  => $this->shippingCountryUuid,
                'shipping' => $this->shippingTypeUuid,
            ],
        ];
    }
}
