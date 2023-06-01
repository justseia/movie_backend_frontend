@extends('layouts.app')

@section('content')
    <div class="banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-wrap justify-content-between align-items-center">
                        <div class="left-wrap">
                            <h2 style="-webkit-line-clamp: 2;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $movie->name }}</h2>
                            <p style="-webkit-line-clamp: 2;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $movie->body }}</p>
                            <div class="row g-3">
                                @if($movie->type_id == 1)
                                    <a href="{{ route('watch', $movie) }}" class="btn btn-lg col-4">
                                        <img src="{{ asset('assets/images/play.png') }}" alt="icn">
                                        Movie
                                    </a>
                                @endif
                                <form action="{{ route('home.friend', $movie) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-lg col-4">Find Friend</button>
                                </form>
                                <a href="{{ route('movie.buy.index', $movie) }}" class="btn btn-lg col-4">
                                    Buy Ticket
                                </a>
                            </div>
                        </div>
                        <div class="right-wrap" style="background-image: url({{ $movie->image }});"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left mb-4 mt-4">
                    <h2>Find Friends</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-slider owl-carousel owl-theme">
                        @foreach($users as $user)
                            <div class="owl-items">
                                <a href="{{ route('profile.friend', $user->user->id) }}" class="crew-wrap">
                                    <img src="{{ $user->user->avatar }}" alt="{{ $user->user->email }}">
                                    <span style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">{{ $user->user->name }}</span>
                                    <span style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">{{ $user->user->email }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
