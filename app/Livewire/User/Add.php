<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class Add extends Component
{
    
    use WithFileUploads;

    public $id;
    public $image;
    public $name;
    public $email;



    public function store()
    {
        $this->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'name'   => 'required',
            'email' => 'required',
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/users', $image->hashName());

        // Upload image
        $imagePath = $this->image->storeAs('public/users', $this->image->hashName());


        $user = User::create([
            'image'     => $imagePath,
            'name'     => $this->name,
            'email'   => $this->email
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.add');
    }
}
