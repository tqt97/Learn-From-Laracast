<?php

use Modules\Order\Providers\OrderServiceProvider;
use Modules\Order\Providers\RouteServiceProvider;
use Modules\Product\Providers\ProductServiceProvider;
use Modules\Shipment\Providers\ShipmentServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    
    OrderServiceProvider::class,
    ProductServiceProvider::class,
    ShipmentServiceProvider::class,

    // ...
];
