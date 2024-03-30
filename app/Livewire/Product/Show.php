<?php

namespace App\Livewire\Product;

use App\Actions\WebShop\addToCart;
use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
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

    }

    public function render()
    {
        return view('livewire.product.show');
        // ->layout('layouts.app');
    }
}
