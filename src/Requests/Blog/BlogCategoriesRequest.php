<?php

namespace Theshop\ApiClient\Requests\Blog;

use Theshop\ApiClient\AbstractRequest;

class BlogCategoriesRequest extends AbstractRequest
{
    protected string $url = 'v1/blog-categories';

    public function __construct(
        private readonly string $locale,
        private readonly string $currency,
        private readonly int $limit = 0,
        private readonly int $offset = 0,
        private readonly string $order = 'desc',
        private readonly string $sort = 'created_at'
    ) {
        $this->options = [
            'query' => [
                'currency' => $this->currency,
                'limit'    => $this->limit,
                'offset'   => $this->offset,
                'order'    => $this->order,
                'sort'     => $this->sort,
                'locale'   => $this->locale,
            ],
        ];
    }
}
