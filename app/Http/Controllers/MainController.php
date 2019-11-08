<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function listMovies(){
        $movies=Movie::all();

        return view('movies')
            ->with('movies',$movies);
    }
    public function listSeries(){
        $movies=Movie::all();

        return view('series')
            ->with('movies',$movies);
    }


}
