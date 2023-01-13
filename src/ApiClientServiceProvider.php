<?php

namespace Theshop\ApiClient;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class ApiClientServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/theshop-api-client.php', 'theshop-api-client');

        $this->app->singleton(Connector::class);

        $this->callAfterResolving(Connector::class, static function (Connector $connector) {
            self::registerTheShopConnector($connector);
        });
    }

    private static function registerTheShopConnector(Connector $connector)
    {
        $connector->initConnection(app()->getLocale(), Session::get('currency'), Session::get('access_token'));
    }

    public function boot()
    {

    }
}
