<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Friendcontroller extends Controller
{
    public function __invoke(User $user)
    {
        return view('profile-friend')->with(compact('user'));
    }
}
