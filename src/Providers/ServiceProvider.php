<?php

namespace RobinDrost\PrismicIntegrationField\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Config/prismic-integration-field.php' => config_path('prismic-integration-field.php'),
        ]);
    }

    public function register()
    {
        //
    }
}
