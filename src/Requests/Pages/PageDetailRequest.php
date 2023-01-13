<?php

namespace Theshop\ApiClient\Requests\Pages;

use Theshop\ApiClient\AbstractRequest;

class PageDetailRequest extends AbstractRequest
{
    protected string $url = 'v1/pages/detail';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly string $slug,
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
