<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use Illuminate\Http\Request;

class ProductCategoryDetail extends Component
{
    public function render(Request $request)
    {
        
        return view('livewire.welcome.product-category-detail');
    }
}
