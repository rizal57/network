<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Livewire\Component;

class Statuses extends Component
{
    public $statuses;
    protected $listeners = [
        'statusPosted' => 'render',
    ];

    public function render()
    {
        $this->statuses = Status::where('user_id', auth()->user()->id)->with('user')->latest()->get();
        return view('livewire.statuses');
    }
}
