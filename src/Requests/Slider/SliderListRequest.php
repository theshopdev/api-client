<?php

namespace Theshop\ApiClient\Requests\Slider;

use Theshop\ApiClient\AbstractRequest;

class SliderListRequest extends AbstractRequest
{
    protected string $url = 'v2/sliders';

    public function __construct(
        public readonly string $limit,
        public readonly string $offset,
        public readonly string $order,
        public readonly string $sort,
    ) {
        $this->options = [
            'query' => [
                'limit' => $this->limit,
                'offset' => $this->offset,
                'order' => $this->order,
                'sort' => $this->sort,
            ]
        ];
    }
}