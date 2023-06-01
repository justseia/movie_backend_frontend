<div class="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 navbar p-0">
                <a href="{{ route('home.index') }}" class="logo">
                    Ezytick
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav-menu float-none text-center">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('chatify') }}">Chat</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('trailer.index') }}">Movie</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('event.index') }}">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('theater.index') }}">Theaters</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                @auth
                    <div class="user-avater">
                        <img src="{{ auth()->user()->avatar }}" alt="user">
                        <div class="user-menu">
                            <ul>
                                <li><a href="{{ route('profile.index') }}"><i class="ti-user"></i>My Profile</a></li>
                                <li><a href="{{ route('friend.list') }}"><i class="ti-face-smile"></i>My Friends</a></li>
                                <li><a href="{{ route('purchased-tickets.index') }}"><i class="ti-ticket"></i>My tickets</a></li>
                                <li><a href="{{ route('favorite.index') }}"><i class="ti-heart"></i>My Favorites</a></li>
                                <li><a href="{{ route('privacy-policy.index') }}"><i class="ti-world"></i>Privacy Policy</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>Log Out</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}">
                        <div class="user-avater" style="background-color: #132977;border-radius: 5px;color: #fff;width: 80px;font-weight: 500;display: grid;place-content: center;">
                            Login
                        </div>
                    </a>
                @endauth
                <form action="{{ route('search.index') }}">
                    <div class="search-div">
                        <input name="search" type="search" placeholder="Seacrh">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
