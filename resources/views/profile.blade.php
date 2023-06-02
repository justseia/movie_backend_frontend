@extends('layouts.app')

@section('content')
    <form action="{{ route('profile.update') }}" method="post">
        @csrf
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ $user->avatar }}" alt="img" class="rounded-circle p-1 bg-primary" width="110">
                                </div>
                                @if($user->instagram)
                                    <hr class="my-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger">
                                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                                </svg>
                                                Instagram
                                            </h6>
                                            <span class="text-secondary">{{ $user->instagram }}</span>
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="name" type="text" class="form-control" value="John Doe">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="email" type="text" class="form-control" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="age" type="text" class="form-control" value="{{ $user->age }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">University</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="university" type="text" class="form-control" value="{{ $user->university }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Hobbi</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input name="hobbi" type="text" class="form-control" value="{!! $user->hobbi !!}">
                                    </div>
                                </div>
                                <input type="submit" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <style>
        body {
            background: #f7f7ff;
            margin-top: 20px;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }

        .me-2 {
            margin-right: .5rem !important;
        }
    </style>
@endsection

{{--    <div class="page-nav">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-12 text-center">--}}
{{--                    <h2 class="mb-1">My Profile</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="faq-page">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-sm-8">--}}
{{--                    <div id="accordion" class="accordion">--}}
{{--                        <div class="card mb-3">--}}
{{--                            <div class="card-header" id="headingOne">--}}
{{--                                <h5 class="mb-0">--}}
{{--                                    <button class="btn btn-link small-text collapsed pl-5 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">--}}
{{--                                        <i class="ti-user"></i>Account Settings--}}
{{--                                    </button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}

{{--                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">--}}
{{--                                <div class="card-body form-div">--}}
{{--                                    <form action="{{ route('profile.update') }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-6">--}}
{{--                                                <div class="form-group mt-4">--}}
{{--                                                    <input value="{{ auth()->user()->name }}" name="name" class="form-control" type="text" placeholder="Name" style="color: #000;">--}}
{{--                                                    <input value="{{ auth()->user()->age }}" name="age" class="form-control" type="number" placeholder="Age" style="color: #000;">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-6">--}}
{{--                                                <div class="form-group mt-4">--}}
{{--                                                    <input value="{{ auth()->user()->email }}" name="email" class="form-control" type="text" placeholder="Email address" style="color: #000;">--}}
{{--                                                    <input value="{{ auth()->user()->university }}" name="university" class="form-control" type="text" placeholder="University" style="color: #000;">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12">--}}
{{--                                                <div class="form-group mt-4">--}}
{{--                                                    <input value="{{ auth()->user()->instagram }}" name="instagram" class="form-control" type="text" placeholder="Instagram" style="color: #000;">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12">--}}
{{--                                                <div class="form-group mt-4">--}}
{{--                                                    <textarea name="hobbi" rows="5" class="form-control" type="text" placeholder="Hobbi" style="color: #000;padding-top:10px;padding-bottom:10px;height:auto;">{{ auth()->user()->hobbi }}</textarea>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group button-block text-center">--}}
{{--                                            <input type="submit" class="form-btn member-btn3 text-white d-block" value="Save">--}}
{{--                                        </div>--}}

{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card mb-3">--}}
{{--                            <div class="card-header" id="headingTwo">--}}
{{--                                <h5 class="mb-0">--}}
{{--                                    <button class="btn btn-link small-text collapsed pl-5 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                        <i class="ti-credit-card"></i>Payment Info--}}
{{--                                    </button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">--}}
{{--                                <div class="card-body form-div ">--}}
{{--                                    <form action="#">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-12">--}}
{{--                                                <div class="form-group mt-4">--}}
{{--                                                    <input class="form-control" type="text" placeholder="Cardholder Name" style="color: #000;">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-12">--}}
{{--                                                <div class="form-group ">--}}
{{--                                                    <input class="form-control" type="text" placeholder="Card Number" style="color: #000;">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6">--}}
{{--                                                <div class="form-group ">--}}
{{--                                                    <input class="form-control" type="text" placeholder="Expiry Date" style="color: #000;">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-6">--}}
{{--                                                <div class="form-group ">--}}
{{--                                                    <input class="form-control" type="password" placeholder="CVV" style="color: #000;">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group button-block text-center">--}}
{{--                                            <a class="form-btn d-block member-bttn4 text-white">Add Now</a>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="card mb-3">--}}
{{--                            <div class="card-header" id="headingTwo">--}}
{{--                                <h5 class="mb-0">--}}
{{--                                    <button class="btn btn-link small-text collapsed pl-5 text-left">--}}
{{--                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>Log Out</a>--}}
{{--                                    </button>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                            <div id="collapseTHree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">asd</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
