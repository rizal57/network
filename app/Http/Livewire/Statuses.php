<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Status;
use Livewire\Component;

class Statuses extends Component
{
    public $statuses, $status_id, $body;
    protected $listeners = [
        'statusPosted' => 'render',
    ];

    public function render()
    {
        $this->statuses = Status::where('user_id', auth()->user()->id)->with('user')->latest()->get();
        // $this->body = $this->statuses->body;
        return view('livewire.statuses');
    }

    public function deleteStatus($id)
    {
        Status::destroy($id);
    }

    public function editStatus($id)
    {
        $status = Status::find($id);
        $this->body = $status->body;
        $this->status_id = $id;
    }

    public function updateStatus($id)
    {
        Status::where('id', $id)->update([
            'body' => $this->body
        ]);

        $this->status_id = NULL;
    }
}
