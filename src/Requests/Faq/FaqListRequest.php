<?php

namespace Theshop\ApiClient\Requests\Faq;

use Theshop\ApiClient\AbstractRequest;

class FaqListRequest extends AbstractRequest
{
    protected string $url = 'v1/faq';

    public function __construct(
        private readonly string $locale,
        private readonly int $limit = 0,
        private readonly int $offset = 0,
        private readonly string $order = 'desc',
        private readonly string $sort = 'created_at'
    ) {
        $this->options = [
            'query' => [
                'limit'            => $this->limit,
                'offset'           => $this->offset,
                'order'            => $this->order,
                'sort'             => $this->sort,
                'locale'           => $this->locale
            ],
        ];
    }
}
