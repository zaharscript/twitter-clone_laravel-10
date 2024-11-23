<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $thought = new Thought([
            'content' => 'test',
        ]);
        $thought->save();

        return view('twitter.index', [
            'thoughts' => Thought::all()
        ]);
    }
}
