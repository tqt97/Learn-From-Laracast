<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

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
    public function render()
    {
        $products = Product::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('name', $this->sort)
            ->paginate(12);

        return view('livewire.home',[
            'products' => $products
        ]);
    }
}
