<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Livewire\Component;

class Cart extends Component
{
    public function getItemsProperty()
    {
        // return CartFactory::make()->items();
        $items = CartFactory::make()
            ->items()
            ->with('product', 'variant')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        // dd($items);
        return $items;
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
