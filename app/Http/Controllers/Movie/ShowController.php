<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\FindFriend;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Movie $movie)
    {
        $users = FindFriend::where('movie_id', $movie->id)->get();
        return view('single-movie')->with(compact('movie'))->with(compact('users'));
    }
}
