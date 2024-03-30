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
        $cart = match (auth()->guest()) {
            true => Cart::firstOrCreate(['session_id' => session()->getId(),]),
            false => auth()->user()->cart ?: auth()->user()->cart()->create()
        };

        $cart->items()->create([
            'product_variant_id' => $variantId,
            'quantity' => 1
        ]);
    }
}
