<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.profile.index')
        ->layout('components.layouts.app_backend'); 
    }
}
