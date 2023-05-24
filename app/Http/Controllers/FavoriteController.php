<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Overtrue\LaravelFavorite\Favorite;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = auth()->user()->getFavoriteItems(Movie::class)->get();
        return view('favorite')->with(compact('favorites'));
    }

    public function add(Movie $movie)
    {
        auth()->user()->favorite($movie);
        return redirect()->back();
    }

    public function delete(Movie $movie)
    {
        auth()->user()->unfavorite($movie);
        return redirect()->back();
    }
}
