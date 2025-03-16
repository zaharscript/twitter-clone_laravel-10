<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $thoughts = Thought::orderBy('created_at','DESC');

        //equal is sql as "SELECT * FROM thoughts where content like '%search%'" 👇
         if (request()->has('search')) {
           $thoughts = $thoughts->where('content', 'like', '%' . request()->query('search') . '%');
        }


        return view('twitter.index',[
            'thoughts' => $thoughts->paginate(5)
        ]);


    }
}
