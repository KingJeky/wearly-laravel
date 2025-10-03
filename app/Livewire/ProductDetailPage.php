<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Detail Produk - Wearly')]
class ProductDetailPage extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug = $slug;
    }

    public function render()
    {
      
        return view('livewire.product-detail-page',[
            'product'
        ]);
    }
}
