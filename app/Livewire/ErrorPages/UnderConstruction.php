<?php

namespace App\Livewire\ErrorPages;

use Livewire\Component;

class UnderConstruction extends Component
{
    public function render()
    {
        $isActive = 'under-construction';
        return view('livewire.error-pages.under-construction',compact('isActive'))
        ->layout('components.layouts.app_errorpage',compact('isActive'));
    }
}
