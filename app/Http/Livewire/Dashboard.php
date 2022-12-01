<?php

namespace App\Http\Livewire;

use App\Models\Like;
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

    public function like($id)
    {
        $like = Like::where('status_id', $id)->where('user_id', auth()->user()->id)->first();
        if($like) {
            $like->delete();
        } else {
            Like::create([
                'status_id' => $id,
                'user_id' => auth()->user()->id,
            ]);
        }
    }
}
