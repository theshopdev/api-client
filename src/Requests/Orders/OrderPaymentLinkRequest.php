<?php

namespace Theshop\ApiClient\Requests\Orders;

use Theshop\ApiClient\AbstractRequest;

class OrderPaymentLinkRequest extends AbstractRequest
{
    protected string $url = 'v2/orders/payment-link';

    public function __construct(
        public readonly string $uuid,
        public readonly string $success_url,
        public readonly string $error_url,
        public readonly ?string $identifier = null
    ) {
        $this->options = [
            'query' => [
                'uuid' => $this->uuid,
                'success_url' => $this->success_url,
                'error_url' => $this->error_url,
                'identifier' => $this->identifier
            ]
        ];
    }
}