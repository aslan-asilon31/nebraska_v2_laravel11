<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $userId;
    public $image;
    public $name;
    public $email;

    public function mount($id)
    {
        $user = User::find($id);

        if ($user) {
            $this->userId = $user->id;
            $this->image = $user->image;
            $this->name = $user->name;
            $this->email = $user->email;
        }
    }

    public function update()
    {
        $this->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($this->userId);

        if ($user) {
            if ($this->image) {
                // Delete old image
                $newImage = str_replace("public/users/", "", $user->image);
                Storage::disk('local')->delete('public/users/' . $newImage);

                // Upload new image
                $imagePath = $this->image->storeAs('public/users', $this->image->hashName());

                // Update user data with the new image path
                $user->update([
                    'image' => $imagePath,
                ]);
            }

            // Update user data (name and email) if any changes
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);

            // Flash message
            session()->flash('message', 'Data Successfully Updated.');

            // Redirect
            return redirect()->route('user.index');
        }
    }

    public function render()
    {
        return view('livewire.user.edit');
    }
}
