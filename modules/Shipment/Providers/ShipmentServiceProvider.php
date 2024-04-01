<?php

namespace Modules\Shipment\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Shipment\Providers\RouteServiceProvider;

class ShipmentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'shipment');

        $this->app->register(RouteServiceProvider::class);
    }
}
