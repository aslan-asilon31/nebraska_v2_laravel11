<?php

namespace App\Livewire\Category;

use Livewire\Component;
use DB;
use App\Models\MasterData\CategoryMaster;

class Index extends Component
{
    public $search = '';
    public $categories;

    // public function mount()
    // {
    //     $sql = "SELECT category_master_id, status_id, name, desc_cat_type_sub, image_banner,cat_sub_from,cat_type_sub
    //             FROM category_masters
    //             WHERE cat_type_sub = '1' AND status_id = '1' ";

    //     $this->categories = DB::connection('pgsql')->select($sql);
    // }

    // public function updatedCategory()
    // {

    // }

    public function render()
    {

        // dd($categories);
        $isActive = 'category' ;
        $slugs = 'Dashboard > Category' ;

        if ($this->search) {
            // Filter users based on search term
            // $this->categories = CategoryMaster::where('name', 'like', '%' . $this->search . '%')->get();
            $this->categories = CategoryMaster::where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('status_id', 'like', '%' . $this->search . '%');
                    })->get();
            
        } else {
            // Reset to all users if search is empty
            $this->categories = CategoryMaster::all();
        }

        

        return view('livewire.category.index', compact('isActive','slugs'))
                ->layout('components.layouts.app_backend', ['isActive' => $isActive]); 
    }
}
