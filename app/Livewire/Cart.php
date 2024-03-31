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
        $this->dangerBanner('Your product has been removed from your cart', 'success');
        $this->dispatch('cartUpdated');
    }

    public function increment($id)
    {
        CartFactory::make()->items()->where('id', $id)?->increment('quantity', 1);
        $this->banner('Updated your cart quantity successfully');
        $this->dispatch('incrementQuantity');
    }

    public function decrement($id)
    {
        $item = CartFactory::make()->items()->where('id', $id)->firstOrFail();
        if ($item->quantity > 1) {
            $item->decrement('quantity', 1);
            $this->banner('Updated your cart quantity successfully');
        } else {
            $item->delete();
            $this->dangerBanner('Your product has been removed from your cart');
        }
        $this->dispatch('decrementQuantity');
    }

    public function render()
    {
        return view('livewire.cart')->layout('layouts.app');
    }
}
