<?php

namespace App\Actions\WebShop;

use App\Models\Cart;
use App\Models\Product;

class addToCart
{
    // public function __invoke(Product $product)
    // {
    //     $product->increment('stock', 1);
    // }

    public function add($variantId)
    {
        if (auth()->guest()) {
            $cart = Cart::firstOrCreate([
                'session_id' => session()->getId(),
            ]);
        }

        if (auth()->user()) {
            $cart = auth()->user()->cart ?: auth()->user()->cart()->create();
        }

        dd($cart);
    }
}
