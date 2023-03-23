<?php

namespace Theshop\ApiClient\Requests\Products;

use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class CreateProductReview extends AbstractRequest
{
    protected string $url = 'v1/products/review';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        private readonly string $locale,
        private readonly string $email,
        private readonly string $author,
        private readonly string $text,
        private readonly string $product,
        private readonly string $rating,
    ) {
        $this->options = [
            'form_params' => [
                'locale'        => $this->locale,
                'email'         => $this->email,
                'author'        => $this->author,
                'text'          => $this->text,
                'product'       => $this->product,
                'rating'        => $this->rating
            ],
        ];
    }
}
