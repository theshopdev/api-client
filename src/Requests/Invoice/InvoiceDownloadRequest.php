<?php

namespace Theshop\ApiClient\Requests\Invoice;

use Theshop\ApiClient\AbstractRequest;

class InvoiceDownloadRequest extends AbstractRequest
{
    protected string $url = 'v2/invoices/download';

    public function __construct(
        public readonly string $uuid,
    ) {
        $this->options = [
            'query' => [
                'uuid' => $this->uuid,
            ],
        ];
    }
}
