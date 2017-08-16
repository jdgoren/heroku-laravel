<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('home')->with(compact('movies'));
    }

    /**
     * Mark movie watched.
     *
     * @param  Movie  $movie [description]
     * @return [type]        [description]
     */
    public function watch(Movie $movie)
    {
        auth()->user()->movies_watched()->attach($movie);

        return redirect()->to('/');
    }

    /**
     * Mark movie not watched.
     * 
     * @param  Movie  $movie [description]
     * @return [type]        [description]
     */
    public function unwatch(Movie $movie)
    {
        auth()->user()->movies_watched()->detach($movie);

        return redirect()->to('/');
    }
}
