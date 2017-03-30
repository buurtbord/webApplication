<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BuurtPlannenController extends Controller
{
    //
    
    public function buurtplannen()
    {
        $buurtplannen = \DB::table('buurtplannen')->get();

        return view('pagina.buurtplannen', compact('buurtplannen'));
    }
}
