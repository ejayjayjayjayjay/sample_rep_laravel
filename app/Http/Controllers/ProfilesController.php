<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);

        return view('home', [
            'user' => $user,
        ]);
    }
}
