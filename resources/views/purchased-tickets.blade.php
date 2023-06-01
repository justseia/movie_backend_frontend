@extends('layouts.app')

@section('content')
    <div class="page-nav p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="search-wrapper">
                        <h2 class="mb-3">My tickets</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        @foreach($tickets as $ticket)
                            <div class="col-3">
                                <a class="slide-one" href="{{ route('home.show', $ticket) }}">
                                    <div class="slide-image"><img src="{{ $ticket->movie->image }}" alt="image"></div>
                                    <div class="slide-content">
                                        <h2 style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">
                                            {{ $ticket->movie->name }}
                                        </h2>
                                        <p style="-webkit-line-clamp: 3;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $ticket->movie->body }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
