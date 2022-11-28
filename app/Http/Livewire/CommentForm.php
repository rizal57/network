<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CommentForm extends Component
{
    public $body;
    public $status;

    public function render()
    {
        return view('livewire.comment-form');
    }

    public function store()
    {
        $this->validate([
            'body' => 'required'
        ]);

        Comment::create([
            'user_id' => auth()->user()->id,
            'status_id' => $this->status->id,
            'body' => $this->body,
        ]);

        $this->emit('postedComment');
        $this->body = NULL;
    }
}
