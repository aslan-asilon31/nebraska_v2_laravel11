<?php

namespace App\Livewire\ErrorPages;

use Livewire\Component;

class AccessDenied extends Component
{
    public function render()
    {
        return view('livewire.error-pages.access-denied');
    }
}
