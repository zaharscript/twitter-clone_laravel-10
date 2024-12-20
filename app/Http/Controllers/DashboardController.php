<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $thoughts = Thought::latest()->paginate(10);
        return view('twitter.index', compact('thoughts'));
    }
}
