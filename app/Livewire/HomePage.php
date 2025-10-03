<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title('Halaman Utama - Wearly')]
    public function render()
    {
        $categories = Category::where('is_active',1)->get();
        return view('livewire.home-page',[
            'categories' => $categories,
        ]);
    }
}
