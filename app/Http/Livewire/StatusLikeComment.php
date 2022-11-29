<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StatusLikeComment extends Component
{
    public $status;
    protected $listeners = [
        'postedComment' => 'render',
    ];

    public function render()
    {
        return view('livewire.status-like-comment');
    }
}
