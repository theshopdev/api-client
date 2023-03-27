<?php

namespace Theshop\ApiClient\Requests\ProductTags;

use Theshop\ApiClient\AbstractRequest;

class ProductTagGroupDetailRequest extends AbstractRequest
{
    protected string $url = 'v2/product-tag-groups/detail';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly ?string $slug = null,
        public readonly ?string $uuid = null,
    ) {
        $this->options = [
            'query' => [
                'locale'    => $this->locale,
                'currency'  => $this->currency,
                'slug' => $this->slug,
                'uuid' => $this->uuid,
            ],
        ];
    }


}
