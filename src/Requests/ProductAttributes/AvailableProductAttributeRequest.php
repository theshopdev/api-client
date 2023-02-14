<?php

namespace Theshop\ApiClient\Requests\ProductAttributes;

use Theshop\ApiClient\AbstractRequest;

class AvailableProductAttributeRequest extends AbstractRequest
{
    protected string $url = 'v1/available-product-attributes';

    public function __construct(
        public readonly string  $locale,
        public readonly string  $currency,
        public readonly int     $limit = 1000,
        public readonly int     $offset = 0,
        public readonly string  $order = 'score',
        public readonly string  $sort = 'desc',
        public readonly int     $minPrice = 0,
        public readonly int     $maxPrice = PHP_INT_MAX,
        public readonly array   $attributes = [],
        public readonly ?string $category = null,
        public readonly ?string $customerGroupUuid = null,
        public readonly bool    $showSoldOut = false,
    ) {
        return $this->options = [
            'query' => [
                'limit' => $this->limit,
                'offset' => $this->offset,
                'order' => $this->order,
                'sort' => $this->sort,
                'locale' => $this->locale,
                'currency' => $this->currency,
                'min_price' => $this->minPrice,
                'max_price' => $this->maxPrice,
                'attributes' => $this->attributes,
                'category' => $this->category,
                'show_sold_out' => $this->showSoldOut,
                'apply_customer_group' => $this->customerGroupUuid,
            ]
        ];
    }
}