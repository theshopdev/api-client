<?php

namespace Theshop\ApiClient\Requests\ProductCategories;

use Theshop\ApiClient\AbstractRequest;

class ProductCategoryDetailRequest extends AbstractRequest
{
    protected string $url = 'v1/product-categories/detail';

    public function __construct(
        public readonly string $locale,
        public readonly string $slug,
    ) {
        $this->options = [
            'query' => [
                'locale' => $this->locale,
                'slug'   => $this->slug,
            ],
        ];
    }
}
