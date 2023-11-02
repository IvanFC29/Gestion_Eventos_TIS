<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Carbon\Carbon;

class UserController extends Controller
{
    public function nuevoU() {
        return view('user.nuevoUsuario');
    }

    public function guardarUsuario(Request $request){
        $participante = new Participante();
        $participante->nombre = $request->input('nombre');
        $participante->apellidoP = $request->input('apellidoP');
        $participante->apellidoM = $request->input('apellidoM');
        $participante->email = $request->input('email');
        $participante->carnet = $request->input('ci');
        $participante->universidad = $request->input('universidad');
        $participante->celular = $request->input('cel');
        $participante->fecha_nacimiento = $request->input('nacimiento');
        
        // Guardar usuario
        $participante->save();
        session()->flash('success', '¡Cuenta creada!');
        return view('user.nuevoUsuario');
    }

    public function store(){
        $email = request('email');
        $password = request('password');
        // Buscar el usuario por correo electrónico
        $user = Participante::where('email', $email)->first();
        
        if (!$user) {
            return back()->withErrors([
                'message' => 'El correo electrónico no existe en nuestra base de datos. Por favor, verifique su correo.',
            ]);
        }
    
        // Verificar el carnet
        if ($password != $user->carnet) {
            return back()->withErrors([
                'message' => 'La contraseña es incorrecta. Por favor, intente de nuevo.',
            ]);
        }
    
        auth()->login($user);
    
        return redirect('/home');
    }
}
