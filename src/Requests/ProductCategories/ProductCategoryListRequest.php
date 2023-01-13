<?php

namespace Theshop\ApiClient\Requests\ProductCategories;

use Theshop\ApiClient\AbstractRequest;

class ProductCategoryListRequest extends AbstractRequest
{
    protected string $url = 'v1/product-categories';

    public function __construct(
        public readonly string $locale,
        public readonly int $limit = 0,
        public readonly int $offset = 0,
        public readonly string $sort = 'score',
        public readonly string $order = 'desc'
    ) {
        $this->options = [
            'query' => [
                'locale' => $this->locale,
                'limit'  => $this->limit,
                'offset' => $this->offset,
                'sort'   => $this->sort,
                'order'  => $this->order,
            ],
        ];
    }
}
