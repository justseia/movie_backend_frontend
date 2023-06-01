<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'instagram' => $request->instagram,
            'university' => $request->university,
            'hobbi' => $request->hobbi,
        ]);
        return redirect()->route('profile.update');
    }
}
