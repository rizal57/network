<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FormProfile extends Component
{
    public $name, $email;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }
    public function render()
    {
        return view('livewire.form-profile');
    }

    public function updateProfile($id)
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,' . $id],
        ]);
        $user = User::find($id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->update();

        session()->flash('success', 'Data berhasil diubah');
    }
}
