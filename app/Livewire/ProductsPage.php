<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Produk - Wearly')]
class ProductsPage extends Component
{

    use WithPagination;
    public function render()
    {
        $productQuery = Product::query()->where('is_active',1);
        return view('livewire.products-page',[
            'products' => $productQuery->paginate(6),
            'categories' => Category::where('is_active',1)->get(['id','name','slug']),
        ]);
    }
}
