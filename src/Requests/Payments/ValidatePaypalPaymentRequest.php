<?php

namespace Theshop\ApiClient\Requests\Payments;

use Theshop\ApiClient\AbstractRequest;

class ValidatePaypalPaymentRequest extends AbstractRequest
{
    protected string $url = 'v1/validate-paypal';

    public function __construct(
        public readonly string $amount,
        public readonly string $orderVs,
        public readonly string $currency,
        public readonly string $paypalToken,
        public readonly string $paypalPayerId,
    ) {
        $this->options = [
            'query' => [
                'AMOUNT'   => $this->amount,
                'TID'      => $this->orderVs,
                'CURRENCY' => $this->currency,
                'TOKEN'    => $this->paypalToken,
                'PAYERID'  => $this->paypalPayerId,
            ],
        ];
    }
}
