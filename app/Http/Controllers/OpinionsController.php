<?php

namespace App\Http\Controllers;

use App\Opinion;
use App\Plan;
use Illuminate\Http\Request;

use App\Http\Requests;

class OpinionsController extends Controller
{
    public function show()
    {
        $opinions = Opinion::all();

        return view('opinions.show', compact('opinions'));
    }
}
