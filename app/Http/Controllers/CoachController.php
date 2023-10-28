<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function nuevoC() {
        
        return view('user.nuevoCoach');
    }
}
