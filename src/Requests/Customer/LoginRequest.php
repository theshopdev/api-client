<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class LoginRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/login';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {
        $this->options = [
            'form_params' => [
                'email'    => $this->email,
                'password' => $this->password,
            ],
        ];
    }
}
