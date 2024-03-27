<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class Add extends Component
{
    
    use WithFileUploads;

    public $id;
    public $image;
    public $name;
    public $email;



    public function mount(Request $request)
    {
        // dd($request);
        // $this->validate([
        //     'image'     => 'required|image|mimes:png,jpg,jpeg',
        //     'name'   => 'required',
        //     'email' => 'required',
        // ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/users', $image->hashName());

        // Upload image
        $imagePath = $request->image->storeAs('public/users', $request->image->hashName());


        $user = new User();
        $user->image = $imagePath;
        // dd($user->image);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile_photo_path = $imagePath;
        $user->date_bird = $request->daybirth . "-" . $request->monthbirth . "-" . $request->yearbirth;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->status_id = $request->status;
        $user->department = $request->department;
        $user->section = $request->section;
        $user->phone = $request->phone;
        $user->website = $request->website;
        $user->language = $request->language;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->post_code = $request->post_code;
        $user->social_x = $request->social_x;
        $user->social_fb = $request->social_fb;
        $user->social_ig = $request->social_ig;
        $user->social_github = $request->social_github;
        $user->save();

        // $user = User::create([
        //     'image'     => $imagePath,
        //     'name'     => $this->name,
        //     'email'   => $this->email,
        //     'profile_photo_path'   => $imagePath,
        //     'date_bird'   => $this->$daybirth."-".$this->$monthbirth."-".$this->$yearbirth,
        //     'gender'   => $this->gender,
        // ]);

        //flash message
        // session()->flash('message', 'Data Berhasil Disimpan.');
        toast('Product added to cart successfully!','success');

        //redirect
        return redirect()->route('user.index');
    }

    public function render()
    {
        $isActive = 'user' ;
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;
        toast('User added successfully!','success');

        return view('livewire.user.create', compact('isActive','username','userrole'))
        ->layout('components.layouts.app_backend', ['isActive' => $isActive,'username' => $username, 'userrole' => $userrole]);
    }
}
