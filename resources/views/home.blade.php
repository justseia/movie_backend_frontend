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
										<span class="rnd">IMDb 6.7</span>
										<h2>{{ $movie->name }}</h2>
										<span class="tag"><b>SEASON 1</b></span>
										<span class="tag">2020</span>
										<span class="tag"><b>HD</b></span>
										<span class="tag"><b>16+</b></span>
										<span class="tag">2 h 20 min</span>
										<p>{{ $movie->body }}</p>
										<a href="#" class="btn btn-lg btn-video"><img src="{{ asset('assets/images/play.png') }}" alt="icn">Watch now</a>
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
					<h2>Specials & Latest Movies</h2>
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
										<h2>{{ $movie->name }} <img src="{{ asset('assets/images/plus.png') }}" alt="icon" class="add-wishlist"></h2>
										<p>{{ $movie->body }}</p>
										<span class="tag">2 h 20 min</span>
										<span class="tag">2020</span>
										<span class="tag"><b>HD</b></span>
										<span class="tag"><b>16+</b></span>
									</div>
								</a>
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
				<div class="col-sm-6 text-left mb-4 mt-1">
					<h2>Recommended movies</h2>
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
										<h2>{{ $movie->name }} <img src="{{ asset('assets/images/plus.png') }}" alt="icon" class="add-wishlist"></h2>
										<p>{{ $movie->body }}</p>
										<span class="tag">2 h 20 min</span>
										<span class="tag">2020</span>
										<span class="tag"><b>HD</b></span>
										<span class="tag"><b>16+</b></span>
									</div>
								</a>
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
				<div class="col-sm-6 text-left mb-4 mt-1">
					<h2>Best of World Cinema</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="slide-slider owl-carousel owl-theme">
						@foreach($movies as $movie)
							<div class="owl-items">
								<a class="slide-one slide-two" href="#">
									<div class="slide-image" style="background-image: url({{ $movie->image }});"></div>
									<div class="slide-content">
										<h2>{{ $movie->name }} <img src="{{ asset('assets/images/plus.png') }}" alt="icon" class="add-wishlist"></h2>
										<span class="tag">2 h 20 min</span>
										<span class="tag">2020</span>
										<span class="tag"><b>HD</b></span>
										<span class="tag"><b>16+</b></span>
									</div>
								</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

	{{--	<div class="category-wrapper slide-wrapper">--}}
	{{--		<div class="container">--}}
	{{--			<div class="row">--}}
	{{--				<div class="col-sm-6 text-left mb-4 mt-1">--}}
	{{--					<h2>Watch in Your Language</h2>--}}
	{{--				</div>--}}
	{{--			</div>--}}
	{{--			<div class="row">--}}
	{{--				<div class="col-sm-12">--}}
	{{--					<div class="category-slider owl-carousel owl-theme">--}}
	{{--						<div class="owl-items">--}}
	{{--							<a href="search.html" class="category-wrap" style="background-image: url(images/gb1.png);"><span>Spanish</span></a>--}}
	{{--						</div>--}}
	{{--						<div class="owl-items">--}}
	{{--							<a href="search.html" class="category-wrap" style="background-image: url(images/gb2.png);"><span>Romania</span></a>--}}
	{{--						</div>--}}
	{{--						<div class="owl-items">--}}
	{{--							<a href="search.html" class="category-wrap" style="background-image: url(images/gb3.png);"><span>English</span></a>--}}
	{{--						</div>--}}
	{{--						<div class="owl-items">--}}
	{{--							<a href="search.html" class="category-wrap" style="background-image: url(images/gb4.png);"><span>Swiss</span></a>--}}
	{{--						</div>--}}
	{{--						<div class="owl-items">--}}
	{{--							<a href="search.html" class="category-wrap" style="background-image: url(images/gb2.png);"><span>Italina</span></a>--}}
	{{--						</div>--}}
	{{--						<div class="owl-items">--}}
	{{--							<a href="search.html" class="category-wrap" style="background-image: url(images/gb3.png);"><span>Urdu</span></a>--}}
	{{--						</div>--}}
	{{--					</div>--}}
	{{--				</div>--}}
	{{--			</div>--}}
	{{--		</div>--}}
	{{--	</div>--}}

	<div class="slide-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-left mb-4 mt-1">
					<h2>Best of Oscars</h2>
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
										<h2>{{ $movie->name }} <img src="{{ asset('assets/images/plus.png') }}" alt="icon" class="add-wishlist"></h2>
										<p>{{ $movie->body }}</p>
										<span class="tag">2 h 20 min</span>
										<span class="tag">2020</span>
										<span class="tag"><b>HD</b></span>
										<span class="tag"><b>16+</b></span>
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
