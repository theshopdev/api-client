<?php

namespace Theshop\ApiClient\Requests\Products;

use Theshop\ApiClient\AbstractRequest;

class ProductUpsellRequest extends AbstractRequest
{
    protected string $url = 'v1/products/upsell';

    public function __construct(
        public readonly string  $locale,
        public readonly string  $currency,
        public readonly array   $cart = [],
        public readonly array   $variants = [],
        public readonly ?string $customerGroupUuid = null
    ) {
        $this->options = [
            'query' => [
                'locale' => $this->locale,
                'currency' => $this->currency,
                'cart' => $this->cart,
                'variants' => $this->variants,
                'apply_customer_group' => $this->customerGroupUuid,
            ]
        ];
    }
}