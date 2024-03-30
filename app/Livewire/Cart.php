<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class Cart extends Component
{
    use InteractsWithBanner;
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

    public function delete($id)
    {
        CartFactory::make()->items()->where('id', $id)->delete();
        $this->banner('Your product has been removed from your cart', 'success');
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
