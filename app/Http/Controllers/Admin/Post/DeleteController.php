<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Restauran;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Restauran $post)
    {
        $post->delete();
        return redirect()->back()
            ->with('status', '200')
            ->with('message', 'Успешно удалено');
    }
}
