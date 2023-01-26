<?php

namespace Theshop\ApiClient\Requests\Customer;

use Theshop\ApiClient\AbstractRequest;

class UserUpdateRequest extends AbstractRequest
{
    protected string $url = 'v2/user/update';
    protected string $method = 'put';

    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $phone,
        public readonly string $street,
        public readonly string $house_number,
        public readonly string $city,
        public readonly string $zip,
        public readonly string $country,
        public readonly ?string $state = null,
        public readonly ?string $shipping_name = null,
        public readonly ?string $shipping_street = null,
        public readonly ?string $shipping_house_number = null,
        public readonly ?string $shipping_city = null,
        public readonly ?string $shipping_zip = null,
        public readonly ?string $shipping_state = null,
        public readonly ?string $shipping_country = null,
        public readonly ?string $company_name = null,
        public readonly ?string $company_id = null,
        public readonly ?string $company_tax_id = null,
        public readonly ?string $company_vat_id = null,
        public readonly ?string $company_address = null,
        public readonly ?string $company_city = null,
        public readonly ?string $company_zip = null,
        public readonly ?string $company_state = null,
        public readonly ?string $company_country = null,
        public readonly bool $is_newsletter_active = false,
    ) {
        $this->options = [
            'body' => [
                'name'                  => $this->name,
                'email'                 => $this->email,
                'phone'                 => $this->phone,
                'street'                => $this->street,
                'house_number'          => $this->house_number,
                'city'                  => $this->city,
                'zip'                   => $this->zip,
                'country'               => $this->country,
                'state'                 => $this->state ?? null,
                'shipping_name'         => $this->shipping_name ?? null,
                'shipping_street'       => $this->shipping_street ?? null,
                'shipping_house_number' => $this->shipping_house_number ?? null,
                'shipping_city'         => $this->shipping_city ?? null,
                'shipping_zip'          => $this->shipping_zip ?? null,
                'shipping_state'        => $this->shipping_state ?? null,
                'shipping_country'      => $this->shipping_country ?? null,
                'company_name'          => $this->company_name ?? null,
                'company_id'            => $this->company_id ?? null,
                'company_tax_id'        => $this->company_tax_id ?? null,
                'company_vat_id'        => $this->company_vat_id ?? null,
                'company_address'       => $this->company_address ?? null,
                'company_city'          => $this->company_city ?? null,
                'company_zip'           => $this->company_zip ?? null,
                'company_state'         => $this->company_state ?? null,
                'company_country'       => $this->company_country ?? null,
                'is_newsletter_active'  => $this->is_newsletter_active,
            ],
        ];
    }
}
