<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Livewire\Component;
use Illuminate\Support\Str;

class PostForm extends Component
{
    public $body;

    public function render()
    {
        return view('livewire.post-form');
    }

    public function store()
    {
        $this->validate([
            'body' => 'required',
        ]);

        Status::create([
            'body' => $this->body,
            'user_id' => auth()->user()->id,
            'slug' => Str::slug(Str::limit($this->body, 20, '...')),
        ]);

        $this->emit('statusPosted');
        $this->body = NULL;
    }
}
