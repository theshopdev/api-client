<?php

namespace Theshop\ApiClient\Requests\XmlFeeds;

use Theshop\ApiClient\AbstractRequest;

class GoogleXmlFeedRequest extends AbstractRequest
{
    protected string $url = 'v1/xml/google';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly string $productUrl
    ) {
        $this->options = [
            'query' => [
                'locale' => $this->locale,
                'currency' => $this->currency,
                'product_url' => $this->productUrl
            ]
        ];
    }
}