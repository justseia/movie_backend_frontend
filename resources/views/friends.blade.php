@extends('layouts.app')

@section('content')
    <div class="slide-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left mb-4 mt-4">
                    <h2>My Friends</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-slider owl-carousel owl-theme">
                        @foreach($friends as $friend)
                            <div class="owl-items">
                                <a href="{{ route('profile.friend', $friend->id) }}" class="crew-wrap">
                                    <img src="{{ $friend->followable->avatar }}" alt="{{ $friend->followable->email }}">
                                    <span style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">{{ $friend->followable->name }}</span>
                                    <span style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">{{ $friend->followable->email }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
