<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ExploreUsers extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.explore-users', [
            'users' => User::where('name', 'like', '%'.$this->search.'%')->orderBy('name', 'asc')->paginate(12),
        ]);
    }

    public function follow(User $user)
    {
        auth()->user()->following()->where('following_user_id', $user->id)->first() ? auth()->user()->following()->detach($user) : auth()->user()->following()->save($user);

        $this->emit('follows');
    }
}
