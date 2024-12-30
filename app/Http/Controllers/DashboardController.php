<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $query = Thought::latest();

        if (request()->has('search')) {
            $query = Thought::where('content', 'like', '%' . request()->query('search') . '%');
        }

        $thoughts = $query->paginate(5);

        return view('twitter.index', compact('thoughts'));
    }
}
