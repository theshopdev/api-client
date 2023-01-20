<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class PasswordResetRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/request-password-reset';
    protected string $method = 'post';

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
