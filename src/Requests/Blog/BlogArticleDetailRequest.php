<?php

namespace Theshop\ApiClient\Requests\Blog;

use Theshop\ApiClient\AbstractRequest;

class BlogArticleDetailRequest extends AbstractRequest
{
    protected string $url = 'v1/blog/detail';

    public function __construct(
        private readonly string $locale,
        private readonly string $currency,
        private readonly string $slug
    ) {
        $this->options = [
            'query' => [
                'locale'   => $this->locale,
                'currency' => $this->currency,
                'slug'     => $this->slug,
            ],
        ];
    }
}
