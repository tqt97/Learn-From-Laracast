<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public $product;
    public function mount($id)
    {
        // dd($id);
        $this->product = Product::find($id);
    }

    // public function getProductProperty($id)
    // {
    //     return Product::findOrFail($id);
    // }
    public function render()
    {
        return view('livewire.product.show');
        // ->layout('layouts.app');
    }
}
