<?php

namespace App\Http\Controllers;

use App\Models\FindFriend;
use App\Models\Movie;
use App\Models\MovieOrder;
use App\Models\Ticket;
use App\Models\User;

class AllController extends Controller
{
    public function friend()
    {
        $friends = auth()->user()->followings()->with('followable')->get();
        return view('friends')->with(compact('friends'));
    }

    public function follow(User $user)
    {
        auth()->user()->follow($user);
        return redirect()->route('profile.friend', $user);
    }

    public function unfollow(User $user)
    {
        auth()->user()->follow($user);
        return redirect()->route('profile.friend', $user);

    }

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

    public function purchased_tickets()
    {
        $tickets = MovieOrder::where('user_id', auth()->user()->id)->get();
        return view('purchased-tickets')->with(compact('tickets'));
    }

    public function buy_ticket_index(Movie $movie)
    {
//        $tickets = Ticket::where('movie_id', $movie->id)->get();
        return view('ticket-buy')->with(compact('movie'));
    }

    public function buy_ticket(Movie $movie)
    {
//        $hello = MovieOrder::create([
//            ''
//        ]);
        auth()->user()->update([
            'qwerty' => true,
        ]);
        return view('ticket-buy');
    }

    public function search()
    {
        $searchs = Movie::where('name', 'LIKE', '%' . request('search') . '%')->get();
        return view('search')->with(compact('searchs'));
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function policy()
    {
        return view('policy');
    }

    public function organizers()
    {
        return view('organizers');
    }
}
