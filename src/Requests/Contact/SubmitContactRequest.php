<?php

namespace Theshop\ApiClient\Requests\Contact;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class SubmitContactRequest extends AbstractRequest
{
    protected string $url = 'v1/contact';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        public readonly string $fullname,
        public readonly string $email,
        public readonly string $message,
    ) {
        $this->options = [
            'form_params' => [
                'fullname' => $this->fullname,
                'email' => $this->email,
                'message' => $this->message,
            ]
        ];
    }
}