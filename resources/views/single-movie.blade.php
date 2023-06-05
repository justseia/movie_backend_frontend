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
                            <div class="row g-3" style="flex-wrap: nowrap;gap: 10px;position: absolute;z-index: 9999;">
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
                    <div class="team-slider row">
                        @forelse($users as $user)
                            <div class="owl-items col-2">
                                <a href="{{ route('profile.friend', $user->user->id) }}" class="crew-wrap">
                                    <img src="{{ $user->user->avatar }}" alt="{{ $user->user->email }}">
                                    <span style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">{{ $user->user->name }}</span>
                                    <span style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">{{ $user->user->email }}</span>
                                </a>
                            </div>
                        @empty
                            <div>Not request friend</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
                <a href="#home" class="nav-link active" data-bs-toggle="tab">Info</a>
            </li>
            <li class="nav-item">
                <a href="#profile" class="nav-link" data-bs-toggle="tab">Venue</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="home" style="white-space: pre-line;">
                3 legends on ONE stage!
                June 3 | 2023

                ARASH | ORDA | OUTLANDISH

                ✅Arash - Iranian-
                Swedish singer, dancer, composer and producer. Made a duet with artist Snoop Dog, Sean Paul Songs - Arash, Dooset Daram, OMG, Pure Love, Broken Angel, Tike Tike Kardi, Temtation, Boro Boro

                ✅Outlandish - Danish hip
                hop group. Formed in 1997, it consists of Waqas Ali Qadri and Lenny Martinez
                Songs – Aicha, Callin U, Guantanamo, Walou

                ✅Orda - founded in 2000. Lovers of the PEOPLE!
                The soloists of the group are Esbolat Bedelkhan, Erbolat Bedelkhan, Dastan Orazbekov and Nurlan Alymbekov.            </div>
            <div class="tab-pane fade" id="profile">
                <h4 class="mt-2">Profile tab content</h4>
                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
            </div>
        </div>
    </div>
@endsection
