<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\MasterData\CategoryMaster;
use Illuminate\Support\Facades\Auth;
use Alert;
use Livewire\WithPagination;

class Index extends Component
{
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
    }


    public function render()
    {
        $isActive = 'user';
        $categories = CategoryMaster::select('category_master_id')->get();
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;
        $users = User::orderBy('id','asc')->paginate(3);

        return view('livewire.user.index', compact('users','isActive','username','userrole'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'categories' => $categories,'username' => $username, 'userrole' => $userrole]);
    }
}
