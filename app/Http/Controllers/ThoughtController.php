<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ThoughtController extends Controller
{
    public function store(Request $request)
    {
        $thought = Thought::create([
            'content' => request()->get('think', ' '),
        ]);
        // $thought->save();

        // $request->validate([
        //     'thought' => 'required|string|max:255',
        // ]);

        // Thought::create([
        //     'content' => $request->input('thought'),
        // ]);

        return redirect()->route('dashboard');
    }
}
