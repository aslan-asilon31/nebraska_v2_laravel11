<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use App\Models\MasterData\CategoryMaster;
use Illuminate\Support\Facades\Auth;
use Alert;
use Livewire\WithPagination;


class Create extends Component
{

    public function render()
    {
        $isActive = 'user';
        $categories = CategoryMaster::select('category_master_id')->get();
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;

        return view('livewire.user.create', compact('isActive','username','userrole'))
        ->layout('components.layouts.app_backend', ['isActive' => $isActive,'categories' => $categories,'username' => $username, 'userrole' => $userrole]);
    }
}
