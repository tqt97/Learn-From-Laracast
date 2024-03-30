<?php

namespace App\Actions\WebShop;

use App\Models\Cart;
use App\Models\Product;
use App\Factories\CartFactory;

class addToCart
{
    // public function __invoke(Product $product)
    // {
    //     $product->increment('stock', 1);
    // }

    public function add($variantId)
    {
        // $cart = match (auth()->guest()) {
        //     true => Cart::firstOrCreate(['session_id' => session()->getId(),]),
        //     false => auth()->user()->cart ?: auth()->user()->cart()->create()
        // };

        CartFactory::make()->items()->firstOrCreate([
            'product_variant_id' => $variantId,
        ], [
            'quantity' => 0
        ])->increment('quantity', 1);
    }
}
