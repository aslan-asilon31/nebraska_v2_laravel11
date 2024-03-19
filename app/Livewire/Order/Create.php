<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.order.create')
        ->layout('components.layouts.app_backend'); 
    }
}
