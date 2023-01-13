<?php

namespace Theshop\ApiClient;

class ResponseDTO
{
    public function __construct(
        public readonly int $code = 200,
        public readonly array $data = []
    ) {
    }
}
