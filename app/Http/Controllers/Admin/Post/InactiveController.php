<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Restauran;
use Illuminate\Http\Request;

class InactiveController extends Controller
{
    public function __invoke()
    {
        $posts = Restauran::all();
        return view('admin.index')->with(compact('posts'));
    }
}
