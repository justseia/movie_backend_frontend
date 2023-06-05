<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Post;
use App\Models\Restauran;
use App\Models\User;
use Illuminate\Http\Request;

class InactiveController extends Controller
{
    public function __invoke()
    {
        $movies = Movie::all();
        $users = User::where('type', 2)->get();
        return view('admin.index')->with(compact('movies'))->with(compact('users'));
    }
}
