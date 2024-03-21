<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\MasterData\CategoryMaster;
use Illuminate\Support\Facades\Auth;

use Alert;

class Index extends Component
{

    public function mount(){
    }

    public function render()
    {
        $isActive = 'dashboard' ;

        $categories = CategoryMaster::select('category_master_id')->get();
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;
        // alert()->html('<i>HTML</i> <u>example</u>',"
        //     You can use <b>bold text</b>,
        //     <a href='//github.com'>links</a>
        //     and other HTML tags
        // ",'success');
            
        return view('livewire.dashboard.index', compact('isActive','username','userrole'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'categories' => $categories,'username' => $username, 'userrole' => $userrole]);
    }
}
