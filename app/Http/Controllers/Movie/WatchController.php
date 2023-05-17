<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function __invoke()
    {
     return view('movie');
    }
}
