<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function __invoke(Movie $movie)
    {
        return redirect()->route('home.show', $movie);
    }
}
