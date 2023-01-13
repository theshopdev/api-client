<?php

namespace Theshop\ApiClient\Requests\Products;

use Theshop\ApiClient\AbstractRequest;

class ProductSearchRequest extends AbstractRequest
{
    protected string $url = 'v1/products/search';

    public function __construct(
        private readonly string $locale,
        private readonly string $currency,
        private readonly string $keyword,
    ) {
        $this->options = [
            'query' => [
                'locale'   => $this->locale,
                'currency' => $this->currency,
                'keyword'  => $this->keyword,
            ],
        ];
    }
}
