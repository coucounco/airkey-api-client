<?php
namespace Coucounco\Airkey\Swagger\Client;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as SP;

class ServiceProvider extends SP
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/airkey.php' => config_path('airkey.php'),
        ], 'config');

    }

    public function register()
    {
        //
        $this->app->bind('airkey:facade', function () {
            return new AirKeyApi();
        });

    }
}
