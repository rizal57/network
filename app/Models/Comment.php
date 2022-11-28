<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status_id',
        'comment_id',
        'body',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
