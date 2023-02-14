<?php

namespace Theshop\ApiClient\Requests\Marketing;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class NewsletterRequest extends AbstractRequest
{
    protected string $url = 'v1/newsletter';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        public readonly string $email,
        public readonly string $locale
    ) {
        $this->options = [
            'form_params' => [
                'email' => $this->email,
                'locale' => $this->locale
            ]
        ];
    }
}