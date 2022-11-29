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
