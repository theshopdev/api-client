<?php

namespace Theshop\ApiClient\Requests\Pages;

use Theshop\ApiClient\AbstractRequest;

class PageDetailRequest extends AbstractRequest
{
    protected string $url = 'v2/pages/detail';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly int $limit = 1000,
        public readonly int $offset = 0,
        public readonly string $sort = 'score',
        public readonly string $order = 'desc',
        public readonly ?string $slug = null,
        public readonly ?string $uuid = null,
    ) {
        $this->options = [
            'query' => [
                'locale'   => $this->locale,
                'currency' => $this->currency,
                'limit'    => $this->limit,
                'offset'   => $this->offset,
                'sort'     => $this->sort,
                'order'    => $this->order,
                'slug'     => $this->slug,
                'uuid'     => $this->uuid,
            ],
        ];
    }
}
