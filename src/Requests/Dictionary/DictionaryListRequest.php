<?php

namespace Theshop\ApiClient\Requests\Dictionary;

use Theshop\ApiClient\AbstractRequest;

class DictionaryListRequest extends AbstractRequest
{
    protected string $url = 'v1/language-lines';

    public function __construct(
        public readonly string $locale,
        public readonly string $type = 'default',
    ) {
        $this->options = [
            'query' => [
                'locale' => $this->locale,
                'type'   => $this->type,
            ],
        ];
    }
}
