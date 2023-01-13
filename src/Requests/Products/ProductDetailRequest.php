<?php

namespace Theshop\ApiClient\Requests\Products;

use Theshop\ApiClient\AbstractRequest;

class ProductDetailRequest extends AbstractRequest
{
    protected string $url = 'v2/products/detail';

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
