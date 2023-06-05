@if($movie->type_id == 1)
    <form action="{{ route('movie.buy.store', $movie) }}" method="post">
        @csrf
        <div class="container" style="display:flex;justify-content:center;">
            <img src="{{ asset('assets/images/stadion_2.png') }}" alt="img" style="height: 500px;">
        </div>
        <div class="container" style="padding-top: 50px; padding-bottom: 10px;">
            <div class="row gap-3 text-center form-group">
                <div class="col-6">
                    <select name="category_id" class="form-select" aria-label="Default select example">
                        <option selected>Select section</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="f">F</option>
                        <option value="g">G</option>
                        <option value="g">H</option>
                        <option value="g">J</option>
                    </select>
                </div>
                <div class="col-6">
                    <select name="place_id" class="form-select" aria-label="Default select example">
                        <option selected>Select place</option>
                        @for($i = 1; $i <= 15; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" placeholder="Number Card" required/>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Name" required/>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Date" required/>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="CVC" required/>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary w-100 mt-2">Buy ticket</button>
                </div>
            </div>
        </div>
    </form>
@elseif($movie->type_id == 2)
    <form action="{{ route('movie.buy.store', $movie) }}" method="post">
        @csrf
        <div class="container" style="display:flex;justify-content:center;">
            <img src="{{ asset('assets/images/stadion.jpeg') }}" alt="img" style="height: 500px;">
        </div>
        <div class="container" style="padding-top: 50px;padding-bottom: 10px">
            <div class="row g-5">
                <select name="category_id" class="form-select col-6" aria-label="Default select example">
                    <option selected>Select section</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="f">F</option>
                    <option value="g">G</option>
                </select>
                <select name="place_id" class="form-select col-6" aria-label="Default select example">
                    <option selected>Select place</option>
                    @for($i = 1; $i <= 50; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <input type="number" placeholder="Number Card" required/>
                <input type="text" placeholder="Name" required/>
                <input type="text" placeholder="Date" required/>
                <input type="text" placeholder="CVC" required/>
                <button type="submit">Buy ticket</button>
            </div>
        </div>
    </form>
@elseif($movie->type_id == 3)
    <form action="{{ route('movie.buy.store', $movie) }}" method="post">
        @csrf
        <div class="container" style="display:flex;justify-content:center;">
            <img src="{{ asset('assets/images/stadion_1.jpeg') }}" alt="img" style="height: 500px;">
        </div>
        <div class="container" style="padding-top: 50px;padding-bottom: 10px">
            <div class="row g-5">
                <select name="category_id" class="form-select col-6" aria-label="Default select example">
                    <option selected>Select section</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="f">F</option>
                    <option value="g">G</option>
                    <option value="g">H</option>
                    <option value="g">J</option>
                    <option value="g">K</option>
                    <option value="g">L</option>
                </select>
                <select name="place_id" class="form-select col-6" aria-label="Default select example">
                    <option selected>Select place</option>
                    @for($i = 1; $i <= 20; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <input type="number" placeholder="Number Card" required/>
                <input type="text" placeholder="Name" required/>
                <input type="text" placeholder="Date" required/>
                <input type="text" placeholder="CVC" required/>
                <button type="submit">Buy ticket</button>
            </div>
        </div>
    </form>
@endif

{{--<style>--}}
{{--    .btn {--}}
{{--        background-color: #007bff;--}}
{{--        color: #fff;--}}
{{--    }--}}

{{--    .btn:hover {--}}
{{--        background-color: #0056b3;--}}
{{--    }--}}

{{--    .form-control, .form-select {--}}
{{--        border-radius: 0;--}}
{{--    }--}}
{{--</style>--}}
