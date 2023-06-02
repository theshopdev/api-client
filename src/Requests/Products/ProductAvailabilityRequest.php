<?php

namespace Theshop\ApiClient\Requests\Products;

use Theshop\ApiClient\AbstractRequest;

class ProductAvailabilityRequest extends AbstractRequest
{
    protected string $url = 'v2/products/availability';

    public function __construct(
        public readonly string $uuid
    ) {
        $this->options = [
            'query' => [
                'uuid' => $this->uuid,
            ],
        ];
    }
}
