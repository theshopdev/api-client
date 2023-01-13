<?php

namespace Theshop\ApiClient\Requests\Cart;

use Theshop\ApiClient\AbstractRequest;

class CartDetailRequest extends AbstractRequest
{
    protected string $url = 'v1/cart';

    public function __construct(
        public readonly string $locale,
        public readonly string $currency,
        public readonly array $cart = [],
        public readonly array $multipack = [],
        public readonly ?string $voucherCode = null,
        public readonly ?string $shippingCountry = null,
        public readonly ?string $shipping = null,
        public readonly ?string $payment = null,
        public readonly array $checkoutSupport = [],
        public readonly array $variants = []
    ) {
        $this->options = [
            'query' => [
                'locale'           => $this->locale,
                'currency'         => $this->currency,
                'cart'             => $this->cart,
                'multipack'        => $this->multipack,
                'voucher'          => $this->voucherCode,
                'shipping_country' => $this->shippingCountry,
                'shipping_type'    => $this->shipping,
                'payment_type'     => $this->payment,
                'checkout_support' => $this->checkoutSupport,
                'variants'         => $this->variants,
            ],
        ];
    }
}
