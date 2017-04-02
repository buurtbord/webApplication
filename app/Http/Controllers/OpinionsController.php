<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

use App\Http\Requests;

class OpinionsController extends Controller
{
    public function show(Plan $plan)
    {

        return view('plans.show', ['plan' => $plan]);
    }
}
