<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {

        //dd('hit');
        $users = User::all();

        return view('users.index', compact('users'));

    }

    public function user(User $user)
    {


        return view('users.user', compact('user'));


    }
}
