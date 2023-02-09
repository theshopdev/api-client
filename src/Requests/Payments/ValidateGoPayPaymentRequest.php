<?php

namespace Theshop\ApiClient\Requests\Payments;

use Theshop\ApiClient\AbstractRequest;

class ValidateGoPayPaymentRequest extends AbstractRequest
{
    protected string $url = 'v1/validate-gopay';

    public function __construct(
        public readonly string $tid,
        public readonly string $order,
        public readonly string $currency,
    ) {
        $this->options = [
            'query' => [
                'TID' => $this->tid,
                'ORDER' => $this->order,
                'currency' => $this->currency
            ]
        ];
    }
}