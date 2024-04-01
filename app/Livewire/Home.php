<?php

namespace App\Livewire;

use App\Actions\WebShop\addToCart;
use App\Models\Product;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    use InteractsWithBanner;

    public $sort = 'desc';
    public $search = '';

    public function orderBy()
    {
        if ($this->sort == 'asc') {
            $this->sort = 'desc';
        } else {
            $this->sort = 'asc';
        }
    }


    public function add(Product $product, addToCart $cart)
    {

        $variant = $product->variants->first()->id;

        $cart->add(
            variantId: $variant
        );

        $this->banner('Your product has been added to your cart', 'success');
        $this->dispatch('addToCartUpdated');
    }
    public function render()
    {
        $products = Product::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('name', $this->sort)
            ->paginate(12);

        return view('livewire.home', [
            'products' => $products
        ]);
    }
}
