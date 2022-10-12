<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movie()
    {
        $movies = Movie::all();
        $data = compact('movies');
        // dd($movies);
        return view('movies.index', $data);
    }
}
