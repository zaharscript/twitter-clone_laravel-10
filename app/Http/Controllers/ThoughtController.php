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
                'idea' => 'required|string|min:4|max:500' //validation rules
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


    public function show(Thought $thought)
    {

        //dd($thought->comments);
        // return view('twitter.show', [
        //     'thought' => $thought
        // ]);

        // more simplified method 👇🏻
        $readOne = true;//<-- this variable is for the read one button
        return view('twitter.show', compact('thought', 'readOne'));
    }


    public function destroy(Thought $thought)
    {
        $thought->delete();


        return redirect()->route('twitter.index')->with('success', 'Thought deleted!');
    }


    public function edit(Thought $thought)
    {
        $editing = true;//<-- this variable is for the edit button

        return view('twitter.show', compact('thought', 'editing'));
    }


    public function update(Request $request, Thought $thought)
    {
        $request->validate([
            'content' => 'required|string|min:4|max:500'
        ]);

        $thought->update([
            'content' => $request->input('content')
        ]);

        return redirect()->route('twitter.index', $thought->id)->with('success', 'Thought updated successfully!');
    }
}
