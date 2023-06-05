<?php

namespace App\Http\Controllers;

use App\Models\FindFriend;
use App\Models\Movie;
use App\Models\MovieOrder;
use App\Models\Ticket;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function manager()
    {
        $count_films = Movie::where('user')->get();
        $sales = MovieOrder::where('user_id', auth()->user()->id)->get();
        return view('admin.index')
            ->with(compact('sales'))
            ->with(compact('count_films'));
    }

    public function download(Movie $movie)
    {
        $ticket = $movie;
        $pdf = PDF::loadView('ticketPDF', compact('ticket'));
        return $pdf->stream('ticketPDF.pdf');
    }

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

    public function buy_ticket(Movie $movie, Request $request)
    {
        $ticket_price = 0;
        if ($movie->type_id == 1) {
            $ticket_price = 3000;
        } elseif ($movie->type_id == 2) {
            if ($request->category_id == 'a') {
                $ticket_price = 2000;
            } elseif ($request->category_id == 'b') {
                $ticket_price = 3000;
            } elseif ($request->category_id == 'c') {
                $ticket_price = 3500;
            } elseif ($request->category_id == 'd') {
                $ticket_price = 4000;
            } elseif ($request->category_id == 'f') {
                $ticket_price = 4500;
            } elseif ($request->category_id == 'g') {
                $ticket_price = 5000;
            } elseif ($request->category_id == 'g') {
                $ticket_price = 5500;
            }
        } elseif ($movie->type_id == 3) {
            $ticket_price = 5000;
        }
        MovieOrder::create([
            'user_id' => auth()->user()->id,
            'movie_id' => $movie->id,
            'category_id' => $request->category_id,
            'place_id' => $request->place_id,
            'cost' => $ticket_price,
        ]);
        return redirect()->route('purchased-tickets.index');
    }


    public function buy_ticket_index(Movie $movie)
    {
        return view('ticket-buy')->with(compact('movie'));
    }

    public function search(Request $request)
    {
        $searchs = Movie::where('name', 'LIKE', '%' . $request->search . '%')->get();
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
