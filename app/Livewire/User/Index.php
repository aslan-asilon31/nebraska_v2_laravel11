<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }


    public function render()
    {
        $isActive = 'user';
        return view('livewire.user.index', compact('isActive'))
        ->layout('components.layouts.app_backend', compact('isActive'));
    }
}
