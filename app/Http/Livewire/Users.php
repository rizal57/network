<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;
    public function render()
    {
        $this->users = User::limit(5)->latest()->get();
        return view('livewire.users');
    }
}
