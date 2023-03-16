<?php

namespace Theshop\ApiClient\Requests\ProductBrands;

use Theshop\ApiClient\AbstractRequest;

class ProductBrandDetailRequest extends AbstractRequest
{
    protected string $url = 'v1/product-brands/detail';

    public function __construct(
        public readonly ?string $slug = null,
        public readonly ?string $uuid = null,
    ) {
        $this->options = [
            'query' => [
                'slug' => $this->slug,
                'uuid' => $this->uuid,
            ],
        ];
    }
}