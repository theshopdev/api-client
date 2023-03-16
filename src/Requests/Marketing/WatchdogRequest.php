<?php

namespace Theshop\ApiClient\Requests\Marketing;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class WatchdogRequest extends AbstractRequest
{
    protected string $url = 'v1/watchdog';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        public readonly string $email,
        public readonly string $locale,
        public readonly string $productUuid,
    ) {
        $this->options = [
            'form_params' => [
                'locale' => $this->locale,
                'email' => $this->email,
                'product_uuid' => $this->productUuid,
            ]
        ];
    }
}