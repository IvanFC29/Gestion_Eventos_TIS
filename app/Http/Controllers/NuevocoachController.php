<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevocoachController extends Controller
{
    public function nCoach() {
        
        return view('auth.registerCoach');
    }
}
