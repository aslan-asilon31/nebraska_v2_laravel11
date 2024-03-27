<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\MasterData\CategoryMaster;
use Illuminate\Support\Facades\Auth;
use Alert;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;



class Update extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // public $user;
    public $userId;
    public $image;
    public $name;
    public $email;
    public $gender;
    public $role;
    public $status_id;
    public $phone;
    public $website;
    public $language;
    public $address1;
    public $address2;
    public $post_code;
    public $city;
    public $state;
    public $country;
    public $social_x;
    public $social_fb;
    public $social_ig;
    public $social_github;


    public function mount($id)
    {

        $user = User::find($id);

        if ($user) {
            $this->userId = $user->id;
            $this->image = $user->image;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->gender = $user->gender;
            $this->role = $user->role;
            $this->status_id = $user->status_id;
            $this->phone = $user->phone;
            $this->website = $user->website;
            $this->language = $user->language;
            $this->address1 = $user->address1;
            $this->address2 = $user->address2;
            $this->post_code = $user->post_code;
            $this->city = $user->city;
            $this->state = $user->state;
            $this->country = $user->country;
            $this->social_x = $user->social_x;
            $this->social_fb = $user->social_fb;
            $this->social_github = $user->social_github;
        }
    }


    public function update(Request $request)
    {
        dd($request);
        $this->validate([
            'image' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // dd($this->image);


        //get post
        $user = User::find($this->userId);

        // dd('a' . $user->image, 'b' . $this->image);

        $imagePath = null;

        // if ($user && $this->image) {
        //     // Delete old image
        //     $newImage = str_replace("public/users/", "", $this->image);
        //     Storage::disk('local')->delete('public/users/' . $user->image);
    
        //     // Upload new image
        //     if ($request->hasFile('image')) {
        //         // Store the file
        //         $imagePath = $request->file('image')->storeAs('public/users', $request->file('image')->hashName());
        //         // Rest of your logic
        //     }
        // }
    
        // dd($imagePath);
        //check if image
        if ($request->hasFile('image')) {

            // If a new image is uploaded, delete the old one and store the new one
            //store image in storage/app/public/users
            // $this->image->storeAs('public/users', $this->image->hashName());

            $oldImage = $user->image;
            // dd($oldImage);
            if ($oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
            $imagePath = Storage::disk('public')->putFile('users', $this->image);
            // $this->user->image = $imagePath;

            //update user
            $user->update([
                'image' => $imagePath,
                'name' => $this->name,
                'email' => $this->email,
                'gender' => $this->gender,
                'role' => $this->role,
                'status_id' => $this->status_id,
                'phone' => $this->phone,
                'website' => $this->website,
                'language' => $this->language,
                'address1' => $this->address1,
                'address2' => $this->address2,
                'post_code' => $this->post_code,
                'city' => $this->city,
                'state' => $this->state,
                'country' => $this->role,
                'social_x' => $this->social_x,
                'social_fb' => $this->social_fb,
                'social_ig' => $this->social_ig,
                'social_github' => $this->social_github,
            ]);


        }else{
            //update user
            $post->update([
                'name' => $this->name,
                'email' => $this->email,
                'gender' => $this->gender,
                'role' => $this->role,
                'status_id' => $this->status_id,
                'phone' => $this->phone,
                'website' => $this->website,
                'language' => $this->language,
                'address1' => $this->address1,
                'address2' => $this->address2,
                'post_code' => $this->post_code,
                'city' => $this->city,
                'state' => $this->state,
                'country' => $this->role,
                'social_x' => $this->social_x,
                'social_fb' => $this->social_fb,
                'social_ig' => $this->social_ig,
                'social_github' => $this->social_github,
            ]);
            
        }
              
        
        // Update other fields
        // $this->user->gender = $this->gender;
        // $this->user->role = $this->role;
        // $this->user->status_id = $request->status_id;
        // dd('status_id :  '. $this->user->status_id);
        // $this->user->phone = $this->phone;
        // $this->user->website = $this->website;
        // $this->user->language = $this->language;
        // $this->user->address1 = $this->address1;
        // $this->user->address2 = $this->address2;
        // $this->user->post_code = $this->post_code;
        // $this->user->city = $this->city;
        // $this->user->state = $this->state;
        // $this->user->country = $this->country;
        // $this->user->social_x = $this->social_x;
        // $this->user->social_fb = $this->social_fb;
        // $this->user->social_ig = $this->social_ig;
        // $this->user->social_github = $this->social_github;

        // // Save changes
        // $this->user->save();
        toast('User updated successfully!', 'success');
        return route('user.index');
    }
 
    public function render()
    {
        $users = User::find($this->userId);
        $isActive = 'user' ;
        $username = Auth::user()->name;
        $userrole = Auth::user()->role;


        return view('livewire.user.index', compact('users','isActive','username','userrole'))
        ->layout('components.layouts.app_backend', ['isActive' => $isActive,'username' => $username, 'userrole' => $userrole]);
    }


}