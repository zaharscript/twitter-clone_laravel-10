<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {



        return view('twitter.index', [
            'thoughts' => Thought::all()
        ]);
    }
}
