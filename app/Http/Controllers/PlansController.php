<?php

namespace App\Http\Controllers;

use App\Plan;

use Illuminate\Http\Request;

use App\Http\Requests;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        return view('plans.index', compact('plans'));
    }

    public function show(Plan $plan)
    {

        return view('plans.show', ['plan' => $plan]);
    }
}
