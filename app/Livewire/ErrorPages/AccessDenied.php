<?php

namespace App\Livewire\ErrorPages;

use Livewire\Component;

class AccessDenied extends Component
{
    public function render()
    {
        $isActive = 'access-denied';
        return view('livewire.error-pages.access-denied',compact('isactive'))
        ->layout('app_errorpage',compact('isactive'));
    }
}
