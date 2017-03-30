<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Requests;

class PlannenController extends Controller
{
    //
    public function plannen()
    {
        $plannen = \DB::table('plannen')->get();

        return view('pagina.plannen', compact('plannen'));
    }
}
