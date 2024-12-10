<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // $thoughts = Thought::orderBy('created_at', 'desc')->get();
        // return view('thoughts.index', compact('thoughts'));

        return view('twitter.index', [
            'thoughts' => Thought::all()
        ]);
    }
}
