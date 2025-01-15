<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Thought;

class CommentController extends Controller
{

    public function store(Thought $thought)
    {
        //input validation

        $data = request()->validate(
            [
                'content' => 'required|string|min:4|max:255' //validation rules
            ],
            [
                //custom error message
                'content.required' => 'Please enter your comment',
                'content.min' => 'The comment must be at least 5 character',
                'content.max' => 'The comment must not be more than 255 character',

            ]
        );

        $comment = new Comment();
        $comment->thought_id = $thought->id;
        $comment->content = request()->get('content');
        // $comment->content = $data['content'];
        $comment->save();
        return redirect()->route('thoughts.show', $thought->id)->with('success', 'Comment added successfully');
    }
}
