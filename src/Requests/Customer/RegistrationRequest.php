<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class RegistrationRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/register';
    protected string $method = 'post';

    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly string $passwordConfirmation,
        public readonly string $locale,
        public readonly string $currency,
    ) {
        $this->options = [
            'form_params' => [
                'name'                  => $this->name,
                'email'                 => $this->email,
                'password'              => $this->password,
                'password_confirmation' => $this->passwordConfirmation,
                'locale'                => $this->locale,
                'currency'              => $this->currency,
            ],
        ];
    }
}
