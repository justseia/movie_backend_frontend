@extends('layouts.app')

@section('content')
    <div class="slide-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left mb-4 mt-4">
                    <h2>Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        @foreach($events as $event)
                            <div class="col-3">
                                <a class="slide-one" href="{{ route('home.show', $event) }}">
                                    <div class="slide-image"><img src="{{ $event->image }}" alt="image"></div>
                                    <div class="slide-content">
                                        <h2 style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">
                                            {{ $event->name }}
                                            <form action="{{ route('favorite.add', $event) }}" method="post">
                                                @csrf
                                                <button type="submit" style="background-color: #00000000;border: 0px;">
                                                    <img src="{{ asset('assets/images/plus.png') }}" alt="icon" style="position: absolute;top: 25px;right: 10px;">
                                                </button>
                                            </form>
                                        </h2>
                                        <p style="-webkit-line-clamp: 3;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $event->body }}</p>
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
