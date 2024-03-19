<?php

namespace App\Livewire\Buyer;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.buyer.index')
        ->layout('components.layouts.app_backend'); 
    }
}
