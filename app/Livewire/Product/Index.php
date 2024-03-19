<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;


class Index extends Component
{
    public $activeRoute = 'order-list';

    public function render()
    {
        $isActive = $this->activeRoute == 'order-list' ? 'active' : '';
        
        return view('livewire.product.index', compact('isActive'))
        ->layout('components.layouts.app_backend', compact('isActive')); 
    }

    public function addCartItem(Request $request)
    {
        $product = Product::where('id',$request->id)->first()->toArray();
        Cart::add($product); //adding the whole model 
    }


}
