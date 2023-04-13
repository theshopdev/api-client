<?php

namespace Theshop\ApiClient\Requests\Pages;

use Theshop\ApiClient\AbstractRequest;

class PageListRequest extends AbstractRequest
{
    protected string $url = 'v2/pages';

    public function __construct(
        private readonly string $locale,
        private readonly string $currency,
        private readonly int $limit = 0,
        private readonly int $offset = 0,
        private readonly string $order = 'desc',
        private readonly string $sort = 'score',
        private readonly bool $header = false,
        private readonly bool $footer = false,
        private readonly bool $toc = false,
        private readonly bool $gdpr = false
    ) {
        $this->options = [
            'query' => [
                'limit'            => $this->limit,
                'offset'           => $this->offset,
                'order'            => $this->order,
                'sort'             => $this->sort,
                'locale'           => $this->locale,
                'currency'         => $this->currency,
                'list_only_header' => $this->header,
                'list_only_footer' => $this->footer,
                'list_only_toc'    => $this->toc,
                'list_only_gdpr'   => $this->gdpr,
            ],
        ];
    }
}
