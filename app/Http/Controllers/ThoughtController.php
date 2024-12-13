<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{


    public function store(Request $request)
    {
        // input validation
        $request->validate(
            [
                'idea' => 'required|string|min:4|max:255' //validation rules
            ],
            [
                //custom error message
                'idea.required' => 'Please enter your idea',
                'idea.min' => 'The idea must be at least 5 character',
                'idea.max' => 'The idea must not be more than 255 character',

            ]
        );

        $thought = Thought::create([
            'content' => request()->get('idea', ' '),
        ]);


        return redirect()->route('twitter.index')->with('success', 'Another idea added to the vault!');
    }
}
