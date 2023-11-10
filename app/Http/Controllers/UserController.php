<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function nuevoU() {
        return view('user.nuevoUsuario');
    }

    public function guardarUsuario(Request $request){
            
        $user = User::create([
            'name' => $request->input('nombre'),
            'apellidoP' => $request->input('apellidoP'),
            'apellidoM' => $request->input('apellidoM'),
            'email' => $request->input('email'),
            'password' => $request->input('ci'),
            'carnet' => $request->input('ci'),
            'universidad' => $request->input('universidad'),
            'telefono' => $request->input('cel'),
            'fechaN' => $request->input('nacimiento'),
            'rol' => 'estudiante',
            'direccion' => $request->input('direccion'),
        ]);
        
       // auth()->login($user);
        // Guardar usuario
        session()->flash('success', '¡Cuenta creada!');
        return view('user.nuevoUsuario');
    }
    public function store(){
        $email = request('email');
        $password = request('password');
        // Buscar el usuario por correo electrónico
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            return back()->withErrors([
                'message' => 'El correo electrónico no existe en nuestra base de datos. Por favor, verifique su correo.',
            ]);
        }
    
        // Verificar el carnet
        if ($password != $user->password) {
            return back()->withErrors([
                'message' => 'La contraseña es incorrecta. Por favor, intente de nuevo.',
            ]);
        }
    
        auth()->login($user);
    
        return redirect('/usuario-eventos');
    }
}
