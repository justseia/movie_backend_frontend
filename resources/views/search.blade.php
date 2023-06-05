@extends('layouts.app')

@section('content')
    <div class="page-nav p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="search-wrapper">
                        <h2 class="mb-3">Search</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-wrapper search-wrap-slide mt-4">
        <div class="container">
            <div class="row">
                @forelse($searchs as $search)
                    <div class="col-md-4 col-lg-3 mb-3">
                        <a class="slide-one" href="{{ route('home.show', $search->id) }}">
                            <div class="slide-image"><img src="{{ $search->image }}" alt="image"></div>
                            <div class="slide-content">
                                <h2 style="-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;width: 90%;">{{ $search->name }}
                                    <form action="{{ route('favorite.delete', $search) }}" method="post">
                                        @csrf
                                        <button type="submit" style="background-color: #00000000;border: 0px;">
                                            <img src="{{ asset('assets/images/minus.png') }}" alt="icon" style="position: absolute;top: 25px;right: 10px;">
                                        </button>
                                    </form>
                                </h2>
                                <p style="-webkit-line-clamp: 3;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;">{{ $search->body }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div>Not data</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
