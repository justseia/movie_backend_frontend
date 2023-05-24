@extends('layouts.app')

@section('content')
    <div class="banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-slider owl-carousel owl-theme">
                        @foreach($movies as $movie)
                            <div class="owl-items">
                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <h2>{{ $movie->name }}</h2>
                                        <p>{{ $movie->body }}</p>
                                        <a href="#" class="btn btn-lg btn-video"><img src="{{ asset('assets/images/play.png') }}" alt="icn">Trailer</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url({{ $movie->image }});"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left mb-4 mt-4">
                    <h2>Recommended trailers</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide-slider owl-carousel owl-theme">
                        @foreach($movies as $movie)
                            <div class="owl-items">
                                <a class="slide-one" href="{{ route('home.show', $movie) }}">
                                    <div class="slide-image"><img src="{{ $movie->image }}" alt="image"></div>
                                    <div class="slide-content">
                                        <h2 style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">
                                            {{ $movie->name }}
                                            <form action="{{ route('favorite.add', $movie) }}" method="post">
                                                @csrf
                                                <button type="submit" style="background-color: #00000000;border: 0px;">
                                                    <img src="{{ asset('assets/images/plus.png') }}" alt="icon" style="position: absolute;top: 25px;right: 10px;">
                                                </button>
                                            </form>
                                        </h2>
                                        <p style="-webkit-line-clamp: 3;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $movie->body }}</p>
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
