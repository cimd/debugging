<?php

namespace Konnec\Debugging\Providers;

use Illuminate\Support\ServiceProvider as Provider;
use Konnec\Debugging\Stream\Stream;

class ServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'debugging');

        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->publishes([
            __DIR__ . '/../Config/konnec-debugging.php' => config_path('konnec-debugging.php'),
        ], 'konnec-config');
    }

    public function register(): void
    {
        $this->app->singleton('Stream', function () {
            return $this->app->make(Stream::class);
        });
    }
}
