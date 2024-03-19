<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\MasterData\CategoryMaster;

class Index extends Component
{

    public function render()
    {
        $isActive = 'dashboard' ;

        $categories = CategoryMaster::select('category_master_id')->get();

        // foreach ($categories as $category) {
        //     $id = $category->category_master_id; // Access the ID value
        // }

        // dd($categories);
        
        return view('livewire.dashboard.index', compact('isActive'))
            ->layout('components.layouts.app_backend', ['isActive' => $isActive,'categories' => $categories]);
    }
}
