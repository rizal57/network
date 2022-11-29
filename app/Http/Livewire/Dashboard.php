<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Livewire\Component;

class Dashboard extends Component
{
    public $statuses, $likes, $status_id, $limit = 5;
    public $followers;
    public function render()
    {
        $this->statuses = Status::where('user_id', auth()->user()->id)->limit($this->limit)->latest()->get();
        return view('livewire.dashboard');
    }
}
