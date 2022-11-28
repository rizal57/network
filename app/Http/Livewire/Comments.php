<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments, $status;
    protected $listeners = [
        'postedComment' => 'render',
    ];

    public function render()
    {
        $this->comments = Comment::where('status_id', $this->status->id)->latest()->get();
        return view('livewire.comments');
    }
}
