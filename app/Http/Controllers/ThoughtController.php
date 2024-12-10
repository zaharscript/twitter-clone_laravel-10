<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{
    // public function index()
    // {
    //     $thoughts = Thought::orderBy('created_at', 'desc')->get();
    //     return view('thoughts.index', compact('thoughts'));
    // }

    public function store(Request $request)
    {

        $thought = Thought::create([
            'content' => request()->get('idea', ' '),
        ]);


        return redirect()->route('dashboard');
    }
}
