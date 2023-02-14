<?php

namespace Theshop\ApiClient\Requests\Customer;

use Illuminate\Http\UploadedFile;
use Theshop\ApiClient\AbstractRequest;
use Theshop\ApiClient\Enums\RequestMethodEnum;

class ApplyForB2BRequest extends AbstractRequest
{
    protected string $url = 'v1/auth/apply-for-b2b';
    protected string $method = RequestMethodEnum::POST;

    public function __construct(
        public readonly string       $companyName,
        public readonly string       $companyId,
        public readonly string       $companyTaxId,
        public readonly string       $companyAddress,
        public readonly string       $companyCity,
        public readonly string       $companyZip,
        public readonly string       $companyCountry,
        public readonly ?string      $companyVatId = null,
        public readonly ?string      $companyState = null,
        public readonly ?UploadedFile $companyFile = null,
    ) {
        $this->options = [
            'form_params' => [
                'company_name' => $this->companyName,
                'company_id' => $this->companyId,
                'company_tax_id' => $this->companyTaxId,
                'company_vat_id' => $this->companyVatId,
                'company_address' => $this->companyAddress,
                'company_city' => $this->companyCity,
                'company_zip' => $this->companyZip,
                'company_country' => $this->companyCountry,
                'company_state' => $this->companyState,
                'company_file' => $this->companyFile,
            ]
        ];
    }
}