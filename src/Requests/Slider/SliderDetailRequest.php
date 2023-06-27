<?php

namespace Theshop\ApiClient\Requests\Slider;

use Theshop\ApiClient\AbstractRequest;

class SliderDetailRequest extends AbstractRequest
{
    protected string $url = 'v2/sliders/detail';

    public function __construct(
        public readonly string $uuid,
        public readonly string $order,
    ) {
        $this->options = [
            'query' => [
                'uuid' => $this->uuid,
                'order' => $this->order,
            ]
        ];
    }
}