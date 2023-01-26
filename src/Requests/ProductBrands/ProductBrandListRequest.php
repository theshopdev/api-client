<?php

namespace Theshop\ApiClient\Requests\ProductBrands;

use Theshop\ApiClient\AbstractRequest;

class ProductBrandListRequest extends AbstractRequest
{
    protected string $url = 'v1/product-brands';

    public function __construct(
        public readonly string $locale,
        public readonly string $sort = 'name',
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
