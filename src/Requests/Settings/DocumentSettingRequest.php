<?php

namespace Theshop\ApiClient\Requests\Settings;

use Theshop\ApiClient\AbstractRequest;

class DocumentSettingRequest extends AbstractRequest
{
    protected string $url = 'v1/settings/documents';
}