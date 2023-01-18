<?php

namespace Theshop\ApiClient\Requests\Shipping;

use Theshop\ApiClient\AbstractRequest;

class PaymentTypeListRequest extends AbstractRequest
{
    protected string $url = 'v1/payments';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly string $shippingCountryUuid,
    ) {
        $this->options = [
            'query' => [
                'locale'   => $this->locale,
                'currency' => $this->currency,
                'country'  => $this->shippingCountryUuid,
            ],
        ];
    }
}
