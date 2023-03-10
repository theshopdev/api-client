<?php

namespace Theshop\ApiClient\Requests\Checkout;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class CreateOrderRequest extends AbstractRequest
{
    protected string $url = 'v1/checkout';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        private readonly string $currency,
        private readonly string $locale,
        private readonly string $shipping_country,
        private readonly string $shipping_type,
        private readonly array $meta,
        private readonly string $payment_type,
        private readonly string $name,
        private readonly string $email,
        private readonly string $phone,
        private readonly string $street,
        private readonly string $house_number,
        private readonly string $city,
        private readonly string $zip,
        private readonly ?string $state,
        private readonly string $country,
        private readonly ?string $delivery_name,
        private readonly ?string $delivery_street,
        private readonly ?string $delivery_house_number,
        private readonly ?string $delivery_city,
        private readonly ?string $delivery_zip,
        private readonly ?string $delivery_state,
        private readonly ?string $delivery_country,
        private readonly ?string $company_name,
        private readonly ?string $company_id,
        private readonly ?string $company_tax_id,
        private readonly ?string $company_vat_id,
        private readonly ?string $company_address,
        private readonly ?string $company_city,
        private readonly ?string $company_zip,
        private readonly ?string $company_state,
        private readonly ?string $company_country,
        private readonly ?string $notes,
        private readonly bool $toc,
        private readonly bool $newsletter,
        private readonly bool $heureka_allowed,
        private readonly string $success_url,
        private readonly string $error_url,
        private readonly array $cart,
    ) {
        $this->options = [
            'form_params' => [
                'currency'              => $this->currency,
                'locale'                => $this->locale,
                'shipping_country'      => $this->shipping_country,
                'shipping_type'         => $this->shipping_type,
                'meta'                  => $this->meta,
                'payment_type'          => $this->payment_type,
                'name'                  => $this->name,
                'email'                 => $this->email,
                'phone'                 => $this->phone,
                'street'                => $this->street,
                'house_number'          => $this->house_number,
                'city'                  => $this->city,
                'zip'                   => $this->zip,
                'state'                 => $this->state,
                'country'               => $this->country,
                'delivery_name'         => $this->delivery_name,
                'delivery_street'       => $this->delivery_street,
                'delivery_house_number' => $this->delivery_house_number,
                'delivery_city'         => $this->delivery_city,
                'delivery_zip'          => $this->delivery_zip,
                'delivery_state'        => $this->delivery_state,
                'delivery_country'      => isset($this->delivery_name) && $this->delivery_name ? $this->delivery_country : null,
                'company_name'          => $this->company_name,
                'company_id'            => $this->company_id,
                'company_tax_id'        => $this->company_tax_id,
                'company_vat_id'        => $this->company_vat_id,
                'company_address'       => $this->company_address,
                'company_city'          => $this->company_city,
                'company_zip'           => $this->company_zip,
                'company_state'         => $this->company_state,
                'company_country'       => $this->company_country,
                'notes'                 => $this->notes,
                'toc'                   => $this->toc,
                'newsletter'            => $this->newsletter,
                'heureka_allowed'       => $this->heureka_allowed,
                'success_url'           => $this->success_url,
                'error_url'             => $this->error_url,
                'cart'                  => $this->cart,
            ],
        ];
    }
}
