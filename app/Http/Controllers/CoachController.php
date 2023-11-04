<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{
    public function nuevoC() {
        
        return view('user.nuevoCoach');
    }

    public function guardarCoach(Request $request){
        $coach = new Coach();
        $coach->email = $request->input('email');
        $coach->password = $request->input('password');
        
        // Guardar usuario
        $coach->save();
        session()->flash('success', '¡Cuenta creada!');
        return view('auth.registerCoach');
    }
}
