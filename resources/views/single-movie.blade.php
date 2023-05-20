@extends('layouts.app')

@section('content')
    <div class="banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-wrap justify-content-between align-items-center">
                        <div class="left-wrap">
                            <h2>{{ $movie->name }}</h2>
                            <p>{{ $movie->body }}</p>
                            <a href="{{ route('watch', $movie) }}" class="btn btn-lg"><img src="{{ asset('assets/images/play.png') }}" alt="icn">Trailer</a>
                            <a href="#" class="icon-bttn"><i class="ti-plus text-white"></i></a>
                            <div class="icon-bttn">
                                <i class="ti-sharethis text-white mr-4"></i>
                                <div class="share-icons">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="mr-0 ti-pinterest"></i></a>
                                </div>
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
                                <a href="{{ route('profile.friend', $user->id) }}" class="crew-wrap">
                                    <img src="{{ $user->avatar }}" alt="{{ $user->email }}">
                                    <span>{{ $user->name }}</span>
                                    <span>{{ $user->email }}</span>
                                </a>
                            </div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
