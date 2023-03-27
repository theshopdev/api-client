<?php

namespace Theshop\ApiClient\Requests\ProductTags;

use Theshop\ApiClient\AbstractRequest;

class ProductTagListRequest extends AbstractRequest
{
    protected string $url = 'v2/product-tags';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly string $sort = 'created_at',
        public readonly string $order = 'desc',
        public readonly string $limit = '1000',
        public readonly string $offset = '0',
    ) {
        $this->options = [
            'query' => [
                'locale'    => $this->locale,
                'currency'  => $this->currency,
                'sort'      => $this->sort,
                'order'     => $this->order,
                'limit'     => $this->limit,
                'offset'    => $this->offset,
            ],
        ];
    }


}
