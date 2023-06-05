<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        $extension = $request->file('image')->extension();
        $fileName = time() . '.' . $extension;
        $request->file('image')->storeAs('post', $fileName, 'public');
        $requestPhoto = route('home.index') . '/storage/post/' . $fileName;
        Movie::create([
            'name' => $request->title,
            'body' => $request->body,
            'image' => $requestPhoto,
            'url' => '',
            'type_id' => $request->type_id,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('admin.index')
            ->with('status', '200')
            ->with('message', 'Успешно создан');
    }
}
