<?php

namespace App\Http\Livewire;

use App\Models\Like;
use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments, $status, $comment_id, $body;
    protected $listeners = [
        'postedComment' => 'render',
    ];

    public function render()
    {
        $this->comments = Comment::where('status_id', $this->status->id)->latest()->get();
        return view('livewire.comments');
    }

    public function editComment($id)
    {
        $comment = Comment::find($id);
        $this->body = $comment->body;
        $this->comment_id = $id;
    }

    public function updateComment($id)
    {
        Comment::where('id', $id)
                ->update([
                    'body' => $this->body,
                ]);
        $this->comment_id = NULL;
    }

    public function deleteComment($id)
    {
        Comment::destroy($id);
    }

    public function likeComment($id)
    {
        $like = Like::where('comment_id', $id)->where('user_id', auth()->user()->id)->first();
        if($like) {
            $like->delete();
        } else {
            Like::create([
                'comment_id' => $id,
                'user_id' => auth()->user()->id,
            ]);
        }
    }
}
