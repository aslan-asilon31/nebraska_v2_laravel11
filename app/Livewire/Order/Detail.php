<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Detail extends Component
{
    public function render()
    {
        $isActive = 'order-detail' ;


        return view('livewire.order.detail', compact('isActive'))
        ->layout('components.layouts.app_backend', ['isActive' => $isActive]);
    }
}
