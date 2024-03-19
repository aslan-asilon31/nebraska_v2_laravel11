<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Detail extends Component
{
    public $activeRoute = 'order-detail';

    public function render()
    {
        $isActive = $this->activeRoute == 'order-detail' ? 'active' : '';
        
        return view('livewire.product.detail', compact('isActive'))
        ->layout('components.layouts.app_backend', compact('isActive')); 
    }
}
