<?php

namespace Theshop\ApiClient\Requests\Settings;

use Theshop\ApiClient\AbstractRequest;

class CatalogSettingRequest extends AbstractRequest
{
    protected string $url = 'v1/settings/catalog';
}