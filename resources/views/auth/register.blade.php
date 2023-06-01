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
                            <h2>Register</h2>
                            <p>No credit card required</p>
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group mt-5">
                                    <input name="email" class="form-control" type="text" placeholder="Email address" style="color: #000;">
                                    <input name="name" class="form-control" type="text" placeholder="Name" style="color: #000;">
                                    <input name="password" class="form-control" type="password" placeholder="Password" style="color: #000;">
                                </div>
                                <div class="form-group form-check-label">
                                    <label for="tarms-check">
                                        <input class="d-none" type="checkbox" id="tarms-check" checked=""><span class="checkbox"></span>
                                        <p>I agree to the <a href="{{ route('home.index') }}"> Terms &amp; Condition </a></p>
                                    </label>
                                </div>
                                <div class="form-group button-block text-center">
                                    <button type="submit" class="form-btn">Get Started</button>
                                    <p class="sign-up-text">Already have an account?<a href="{{ route('login') }}">Sign in</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
