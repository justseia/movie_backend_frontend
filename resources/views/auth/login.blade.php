@extends('layouts.app')

@section('content')
	<div class="main-wrapper">
		<div class="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="{{ route('home.index') }}" class="logo float-none mt-4">
							Ezytick
						</a>
					</div>
				</div>
			</div>
		</div>
		<section class="form-wrapper">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-5">
						<div class="form-div text-center">
							<h2>Login</h2>
							<p>Enter your account details below</p>
							<form action="{{ route('login') }}" method="post">
								@csrf
								<div class="form-group mt-5">
									<input name="email" class="form-control" type="email" placeholder="Email address">
									<input name="password" class="form-control" type="password" placeholder="Password">
								</div>
								<div class="form-group form-check-label">
									<label for="tarms-check">
										<input class="d-none" type="checkbox" id="tarms-check" checked=""><span class="checkbox"></span>
										<p>Keep me signed in </p>
									</label>
								</div>
								<div class="form-group button-block text-center">
									<button type="submit" class="form-btn">Get Started</button>
									<p class="sign-up-text">Already have an account?<a href="{{ route('register') }}">Sign in</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
