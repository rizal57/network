<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;
    public function render()
    {
        $this->users = User::where('id', '!=', auth()->user()->id)->limit(5)->latest()->get();
        return view('livewire.users');
    }

    public function follow(User $user)
    {
        auth()->user()->following()->where('following_user_id', $user->id)->first() ? auth()->user()->following()->detach($user) : auth()->user()->following()->save($user);

        $this->emit('follows');
    }
}
