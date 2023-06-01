<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Movie $post)
    {
        return view('admin.post')
            ->with(compact('post'));
    }
}
