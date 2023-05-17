<div class="header-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 navbar p-0">
				<a href="{{ route('home.index') }}" class="logo">
					Ezytick
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
				        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
				        aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav nav-menu float-none text-center">
						<li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('chatify') }}">Chat</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="user-avater">
					<img src="{{ asset('assets/images/user-8.png') }}" alt="user">
					<div class="user-menu">
						<ul>
							<li><a href="{{ route('profile.index') }}"><i class="ti-user"></i>My Profile</a></li>
							<li><a href="favorites.html"><i class="ti-heart"></i>My Favorites</a></li>
							<li><a href="term.html"><i class="ti-world"></i>Privacy Policy</a></li>
							<li><a href=""><i class="ti-power-off"></i>Log Out</a></li>
						</ul>
					</div>
				</div>
				<div class="search-div">
					<input type="text" placeholder="Seacrh">
				</div>
			</div>
		</div>
	</div>
</div>
