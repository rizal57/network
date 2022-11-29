<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Livewire\Component;

class Dashboard extends Component
{
    public $statuses, $likes;
    public function render()
    {
        $this->statuses = Status::where('user_id', auth()->user()->id)->latest()->get();
        return view('livewire.dashboard');
    }
}
