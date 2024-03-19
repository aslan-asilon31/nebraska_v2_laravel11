<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Shoppingcart extends Component
{
    public $activeRoute = 'order-shopping-cart';

    public function render()
    {
        $isActive = $this->activeRoute == 'order-shopping-cart' ? 'active' : '';
        
        return view('livewire.product.shoppingcart', compact('isActive'))
        ->layout('components.layouts.app_backend', compact('isActive')); 
    }
}
