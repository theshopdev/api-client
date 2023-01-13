<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class LoginRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/login';
    protected string $method = 'post';

    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {
        $this->options = [
            'query' => [
                'email'    => $this->email,
                'password' => $this->password,
            ],
        ];
    }
}
