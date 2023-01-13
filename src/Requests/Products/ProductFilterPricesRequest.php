<?php

namespace Theshop\ApiClient\Requests\Products;

use Theshop\ApiClient\AbstractRequest;

class ProductFilterPricesRequest extends AbstractRequest
{
    protected string $url = 'v1/products/filter-prices';

    public function __construct(
        private readonly string $currency,
    ) {
        $this->options = [
            'query' => [
                'currency' => $this->currency,
            ],
        ];
    }
}
