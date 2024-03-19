<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Grid extends Component
{
    public $activeRoute = 'order-grid';

    public function render()
    {
        $isActive = $this->activeRoute == 'order-grid' ? 'active' : '';
        
        return view('livewire.product.grid', compact('isActive'))
        ->layout('components.layouts.app_backend', compact('isActive')); 
    }
}
