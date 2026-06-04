<?php

namespace Theshop\ApiClient\Requests\Blog\v2;

use Theshop\ApiClient\AbstractRequest;

class BlogArticleListRequest extends AbstractRequest
{
    protected string $url = 'v2/blog-articles';

    public function __construct(
        private readonly int $limit = 0,
        private readonly int $offset = 0,
        private readonly string $order = 'desc',
        private readonly string $sort = 'score',
        public readonly ?string $keyword = null,
    ) {
        $this->options = [
            'query' => [
                'limit'    => $this->limit,
                'offset'   => $this->offset,
                'order'    => $this->order,
                'sort'     => $this->sort,
                'keyword'  => $this->keyword,
            ],
        ];
    }
}
