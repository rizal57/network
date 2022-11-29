<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Status;
use Livewire\Component;

class Statuses extends Component
{
    public $statuses, $status_id, $body, $limit = 10;
    protected $listeners = [
        'statusPosted' => 'render',
    ];

    public function render()
    {
        $this->statuses = Status::with('user')->limit($this->limit)->latest()->get();
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

    public function loadMore()
    {
        $this->limit += 10;
    }
}
