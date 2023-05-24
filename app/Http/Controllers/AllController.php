<?php

namespace App\Http\Controllers;

use App\Models\FindFriend;
use App\Models\Movie;
use App\Models\MovieOrder;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function find_friend(Movie $movie)
    {
        FindFriend::create([
            'user_id' => auth()->user()->id,
            'movie_id' => $movie->id,
        ]);
        return redirect()->route('home.show', $movie);
    }

    public function privacy_policy()
    {
        return view('privacy-policy');
    }

    public function trailer()
    {
        $trailers = Movie::where('type_id', 1)->get();
        return view('trailer')->with(compact('trailers'));
    }

    public function event()
    {
        $events = Movie::where('type_id', 2)->get();
        return view('event')->with(compact('events'));
    }


    public function theater()
    {
        $theaters = Movie::where('type_id', 3)->get();
        return view('theater')->with(compact('theaters'));
    }

    public function buy_ticket(Movie $movie)
    {
        $hello = MovieOrder::create([
            ''
        ]);
        return view('ticket-buy');
    }
}
