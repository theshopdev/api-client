<?php

namespace Theshop\ApiClient\Requests\Payments;

use Theshop\ApiClient\AbstractRequest;

class ValidateTrustPayPaymentRequest extends AbstractRequest
{
    protected string $url = 'v1/validate-trustpay';

    public function __construct(
        public readonly string $uuid
    ) {
        $this->options = [
            'query' => [
                'uuid' => $this->uuid,
            ]
        ];
    }
}