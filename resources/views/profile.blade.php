@extends('layouts.app')

@section('content')
    <div class="page-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="mb-1">My Profile</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div id="accordion" class="accordion">
                        <div class="card mb-3">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link small-text collapsed pl-5 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="ti-user"></i>Account Settings
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body form-div">
                                    <form action="{{ route('profile.update') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group mt-4">
                                                    <input value="{{ auth()->user()->name }}" name="name" class="form-control" type="text" placeholder="Name" style="color: #000;">
                                                    <input value="{{ auth()->user()->age }}" name="age" class="form-control" type="number" placeholder="Age" style="color: #000;">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mt-4">
                                                    <input value="{{ auth()->user()->email }}" name="email" class="form-control" type="text" placeholder="Email address" style="color: #000;">
                                                    <input value="{{ auth()->user()->university }}" name="university" class="form-control" type="text" placeholder="University" style="color: #000;">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mt-4">
                                                    <input value="{{ auth()->user()->instagram }}" name="instagram" class="form-control" type="text" placeholder="Instagram" style="color: #000;">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mt-4">
                                                    <textarea name="hobbi" rows="5" class="form-control" type="text" placeholder="Hobbi" style="color: #000;padding-top:10px;padding-bottom:10px;height:auto;">{{ auth()->user()->hobbi }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group button-block text-center">
                                            <input type="submit" class="form-btn member-btn3 text-white d-block" value="Save">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link small-text collapsed pl-5 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="ti-credit-card"></i>Payment Info
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body form-div ">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mt-4">
                                                    <input class="form-control" type="text" placeholder="Cardholder Name" style="color: #000;">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <input class="form-control" type="text" placeholder="Card Number" style="color: #000;">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group ">
                                                    <input class="form-control" type="text" placeholder="Expiry Date" style="color: #000;">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group ">
                                                    <input class="form-control" type="password" placeholder="CVV" style="color: #000;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group button-block text-center">
                                            <a class="form-btn d-block member-bttn4 text-white">Add Now</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link small-text collapsed pl-5 text-left">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>Log Out</a>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTHree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">asd</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
