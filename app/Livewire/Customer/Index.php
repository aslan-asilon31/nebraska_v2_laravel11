<?php

namespace App\Livewire\Customer;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.customer.index')
        ->layout('components.layouts.app_backend'); 
    }
}
