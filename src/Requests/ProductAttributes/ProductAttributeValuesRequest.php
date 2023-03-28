<?php

namespace Theshop\ApiClient\Requests\ProductAttributes;

use Theshop\ApiClient\AbstractRequest;

class ProductAttributeValuesRequest extends AbstractRequest
{
    protected string $url = 'v1/product-attribute-values';

    public function __construct(
        public readonly string $locale,
        public readonly string $sort = 'created_at',
        public readonly string $order = 'desc',
        public readonly string $limit = '0',
        public readonly string $offset = '0',
    ) {
        $this->options = [
            'query' => [
                'locale' => $this->locale,
                'sort'   => $this->sort,
                'order'  => $this->order,
                'limit'  => $this->limit,
                'offset' => $this->offset,
            ],
        ];
    }


}
