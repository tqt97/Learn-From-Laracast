<?php

namespace App\Livewire\Product;

use App\Actions\WebShop\addToCart;
use App\Models\Product;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class Show extends Component
{
    use InteractsWithBanner;

    public $product;
    public $variant;

    public $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant,id'],
    ];

    public function mount($id)
    {
        // dd($id);
        $this->product = Product::find($id);
        $this->variant = $this->product->variants->first()->id;
    }

    // public function getProductProperty($id)
    // {
    //     return Product::findOrFail($id);
    // }

    public function addToCart(addToCart $cart){
        $this->validate();

        $cart->add(
            variantId: $this->variant
        );

        $this->banner('Your product has been added to your cart', 'success');
        $this->dispatch('addToCartUpdated');
    }

    public function render()
    {
        return view('livewire.product.show');
        // ->layout('layouts.app');
    }
}
