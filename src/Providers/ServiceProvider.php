<?php

namespace Konnec\Debugging\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->publishes([
            __DIR__ . '/../Config/konnec-debugging.php' => config_path('konnec-debugging.php'),
        ]);
    }
}
