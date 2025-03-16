<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
//tell laravel to allow these fields to be mass assigned
    use HasFactory;
    protected $fillable = [
        'content',
        'likes',
        'dislikes',
    ];


    public function comments()
     {
        //define the relationship between thought and comment
         return $this->hasMany(Comment::class);
     }
}
