<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

#[Title('Produk - Wearly')]
class ProductsPage extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $featured = [];

    #[Url]
    public $on_sale = [];

    public $min_price;
    public $max_price;

    public function mount()
    {
        // pastikan default selalu ada di load pertama
        $this->min_price = $this->min_price ?? 1000;
        $this->max_price = $this->max_price ?? 500000;
    }

    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selected_categories)) {
            $productQuery->whereIn('category_id', $this->selected_categories);
        }

        if ($this->featured) {
            $productQuery->where('is_featured', 1);
        }

        if ($this->on_sale) {
            $productQuery->where('on_sale', 1);
        }

        if ($this->min_price && $this->max_price) {
            $productQuery->whereBetween('price', [
                (int) $this->min_price,
                (int) $this->max_price
            ]);
        }

        return view('livewire.products-page', [
            'products' => $productQuery->paginate(9),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
