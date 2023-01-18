<?php

namespace Theshop\ApiClient\Requests\Voucher;

use Theshop\ApiClient\AbstractRequest;

class VoucherAvailabilityRequest extends AbstractRequest
{
    protected string $url = 'v1/voucher-availability';

    public function __construct(
        public readonly string $code,
        public readonly string $currency
    ) {
        $this->options = [
            'query' => [
                'voucher'  => $this->code,
                'currency' => $this->currency,
            ],
        ];
    }
}
