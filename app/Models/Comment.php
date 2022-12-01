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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like()
    {
        return $this->hasOne(Like::class)->where('user_id', auth()->user()->id);
    }

    public function totalLike()
    {
        return $this->hasMany(Like::class)->count();
    }
}
