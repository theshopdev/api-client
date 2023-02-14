<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class PasswordResetRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/request-password-reset';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        public readonly string $email,
        public readonly string $completePasswordResetUrl,
        public readonly string $locale,
        public readonly string $currency,
    ) {
        $this->options = [
            'form_params' => [
                'email'     => $this->email,
                'reset_url' => $this->completePasswordResetUrl,
            ],
        ];
    }
}
