@extends('layouts.app')

@section('content')
    {{--    <div class="banner-wrapper">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-sm-12">--}}
    {{--                    <div class="banner-wrap justify-content-between align-items-center">--}}
    {{--                        <div class="left-wrap">--}}
    {{--                            <h2 style="-webkit-line-clamp: 2;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $movie->name }}</h2>--}}
    {{--                            <p style="-webkit-line-clamp: 2;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $movie->body }}</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="right-wrap" style="background-image: url({{ $movie->image }});"></div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    @if($movie->type == 1)
        <form action="{{ route('movie.buy.store', $movie) }}" method="post">
            @csrf
            <div class="container" style="display:flex;justify-content:center;">
                <img src="{{ asset('assets/images/stadion.jpeg') }}" alt="img" style="height: 500px;">
            </div>
            <div class="container" style="padding-top: 50px;padding-bottom: 10px">
                <div class="row g-5">
                    <select class="form-select col-6" aria-label="Default select example">
                        <option selected>Select section</option>
                        {{--                @foreach($tickets as $ticket)--}}
                        <option value="a">A</option>
                        {{--                @endforeach--}}
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="f">F</option>
                        <option value="g">G</option>
                    </select>
                    <select class="form-select col-6" aria-label="Default select example">
                        <option selected>Select place</option>
                        @if(auth()->user()->qwerty == false)
                            <option value="1">1</option>
                        @endif
                        @for($i = 2; $i <= 50; $i++)
                            <option value="1">{{ $i }}</option>
                        @endfor
                    </select>
                    <button>Buy ticket</button>
                </div>
            </div>
        </form>
    @elseif($movie->type == 2)
        <form action="{{ route('movie.buy.store', $movie) }}" method="post">
            @csrf
            <div class="container" style="display:flex;justify-content:center;">
                                <img src="{{ asset('assets/images/stadion_1.jpeg') }}" alt="img" style="height: 500px;">
            </div>
            <div class="container" style="padding-top: 50px;padding-bottom: 10px">
                <div class="row g-5">
                    <select class="form-select col-6" aria-label="Default select example">
                    </select>
                    <select class="form-select col-6" aria-label="Default select example">
                        <option selected>Select place</option>
                    </select>
                    <button>Buy ticket</button>
                </div>
            </div>
        </form>
    @elseif($movie->type == 3)
        <form action="{{ route('movie.buy.store', $movie) }}" method="post">
            @csrf
            <div class="container" style="display:flex;justify-content:center;">
                                <img src="{{ asset('assets/images/stadion_1.jpeg') }}" alt="img" style="height: 500px;">
            </div>
            <div class="container" style="padding-top: 50px;padding-bottom: 10px">
                <div class="row g-5">
                    <select class="form-select col-6" aria-label="Default select example">
                    </select>
                    <select class="form-select col-6" aria-label="Default select example">
                        <option selected>Select place</option>
                    </select>
                    <button>Buy ticket</button>
                </div>
            </div>
        </form>
    @endif
@endsection
