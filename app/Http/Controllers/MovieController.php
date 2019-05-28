<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        return view('movies.single-movie', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }
}
