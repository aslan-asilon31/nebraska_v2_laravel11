<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Checkout extends Component
{
    public $activeRoute = 'order-checkout';

    public function render()
    {
        $isActive = $this->activeRoute == 'order-checkout' ? 'active' : '';
        
        return view('livewire.product.checkout', compact('isActive'))
        ->layout('components.layouts.app_backend', compact('isActive')); 
    }
}
