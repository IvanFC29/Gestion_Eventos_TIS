<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;
use Carbon\Carbon;
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

    public function store(){
        $email = request('email');
        $password = request('password');
        // Buscar el usuario por correo electrónico
        $user = Coach::where('email', $email)->first();
        
        if (!$user) {
            return back()->withErrors([
                'message' => 'El correo electrónico no existe en nuestra base de datos. Por favor, verifique su correo.',
            ]);
        }
    
        // Verificar la contraseña
        if ($password != $user->password) {
            return back()->withErrors([
                'message' => 'La contraseña es incorrecta. Por favor, intente de nuevo.',
            ]);
        }
    
        //auth()->login($user);
    
        return redirect('/usuario-eventos');
    }
}
