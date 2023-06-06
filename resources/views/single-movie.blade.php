@extends('layouts.app')

@section('content')
    <div class="banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-wrap justify-content-between align-items-center">
                        <div class="left-wrap">
                            <h2 style="-webkit-line-clamp: 2;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;font-size: 35px;">{{ $movie->name }}</h2>
                            <p style="-webkit-line-clamp: 3;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $movie->body }}</p>
                            <div class="row g-3" style="flex-wrap: nowrap;gap: 10px;position: absolute;z-index: 9999;">
                                @if($movie->type_id == 1)
                                    <a href="{{ route('watch', $movie) }}" class="btn btn-lg col-4">
                                        <img src="{{ asset('assets/images/play.png') }}" alt="icn">
                                        Movie
                                    </a>
                                @endif
                                <form action="{{ route('home.friend', $movie) }}" method="post" style="width:auto;">
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
                <div class="col-12">
                    <div class="row" style="padding-bottom: 20px;">
                        @forelse($users as $user)
                            <div class="col-2">
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
                <div style="padding: 20px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1453.244090497703!2d76.9176168!3d43.2411895!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388369332c238f37%3A0x7d4903079d9c75ca!2z0YPQu9C40YbQsCDQmtGD0YDQvNCw0L3Qs9Cw0LfRiyAxMDMsINCQ0LvQvNCw0YLRiyAwNTAwMDA!5e0!3m2!1sru!2skz!4v1686010635568!5m2!1sru!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
