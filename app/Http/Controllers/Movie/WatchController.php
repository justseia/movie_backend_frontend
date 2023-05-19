<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function __invoke(Movie $movie)
    {
     return view('movie')->with(compact('movie'));
    }
}
