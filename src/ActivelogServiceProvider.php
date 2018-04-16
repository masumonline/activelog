<?php

namespace activelava\activelog;

use Illuminate\Support\ServiceProvider;

class ActivelogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->publishes(
            [
                __DIR__.'/Model' => base_path('app'),
                __DIR__.'/Controller' => base_path('app/Http/Controllers'),
                __DIR__.'/Helpers/' => base_path('app/Helpers'),
                __DIR__.'/Views' => base_path('resources/views/vendor/activelava/activelog'),
            ]
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
