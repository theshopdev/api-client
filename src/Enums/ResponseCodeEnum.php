<?php

namespace Theshop\ApiClient\Enums;

final class ResponseCodeEnum
{
    public const HTTP_SERVICE_UNAVAILABLE = 503;
    public const HTTP_INTERNAL_SERVER_ERROR = 500;
    public const HTTP_UNAUTHORIZED = 401;
    public const HTTP_UNPROCESSABLE_ENTITY = 422;
    public const HTTP_NOT_FOUND = 404;
}
