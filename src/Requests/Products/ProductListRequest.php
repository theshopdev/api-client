<?php

namespace Theshop\ApiClient\Requests\Products;

use Theshop\ApiClient\AbstractRequest;

class ProductListRequest extends AbstractRequest
{
    protected string $url = 'v2/products';

    public function __construct(
        public readonly int $limit = 1000,
        public readonly int $offset = 0,
        public readonly string $sort = 'score',
        public readonly string $order = 'desc',
        public readonly int $minPrice = 0,
        public readonly int $maxPrice = PHP_INT_MAX,
        public readonly array $attributes = [],
        public readonly array $tags = [],
        public readonly string $brandUuid = '',
        public readonly string $page = '',
        public readonly string $categoryUuid = '',
        public readonly bool $showSoldOut = false,
        public readonly array $flags = [],
        public readonly ?string $keyword = null,
        public readonly ?string $customerGroupUuid = null,
        public readonly ?array $uuids = [],
        public readonly ?string $showOnlyDiscounted = null,
        public readonly array $additionalProductData = [],
    ) {
        $this->options = [
            'query' => [
                'limit'         => $this->limit,
                'offset'        => $this->offset,
                'sort'          => $this->sort,
                'order'         => $this->order,
                'min_price'     => $this->minPrice,
                'max_price'     => $this->maxPrice,
                'attributes'    => $this->attributes,
                'tags'          => $this->tags,
                'brand'         => $this->brandUuid,
                'category'      => $this->categoryUuid,
                'show_sold_out' => (int) $this->showSoldOut,
                'flags'         => $this->flags,
                'keyword'       => $this->keyword,
                'apply_customer_group' => $this->customerGroupUuid,
                'uuids'         => $this->uuids,
                'show_only_discounted' => $this->showOnlyDiscounted,
                'page'         => $this->page,
                'additional_product_data' => $this->additionalProductData
            ],
        ];
    }
}
