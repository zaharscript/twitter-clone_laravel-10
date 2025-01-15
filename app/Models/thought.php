<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{

    use HasFactory;

    protected $fillable = [
        'content',
        'likes',
        'dislikes',
    ];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
