<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $isActive = 'order-list' ;
        
        return view('livewire.order.index', compact('isActive'))
        ->layout('components.layouts.app_backend',['isActive' => $isActive]); 
    }
}
