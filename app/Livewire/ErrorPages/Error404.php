<?php

namespace App\Livewire\ErrorPages;

use Livewire\Component;

class Error404 extends Component
{
    public function render()
    {
        $isActive = 'error-404';
        return view('livewire.error-pages.error404',compact('isactive'))
        ->layout('app_errorpage',compact('isactive'));
    }
}
