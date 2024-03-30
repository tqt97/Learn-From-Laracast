<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomePage extends Component
{
    public function getProductsProperty()
    {
        return Product::query()->paginate(12);
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
