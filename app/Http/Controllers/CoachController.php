<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
class CoachController extends Controller
{
    public function nuevoC() {
        
        return view('user.nuevoCoach');
    }
    public function editCoach() {
        
        return view('editarPerfil');
    }
    public function guardarCoach(Request $request){
        $fotoPath = 'fotos/foto_default.jpg';
        $user = User::create([
            'name' => $request->input('nombre'),
            'apellidoP' => $request->input('apellidoP'),
            'apellidoM' => $request->input('apellidoM'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'carnet' => $request->input('ci'),
            'universidad' => $request->input('universidad'),
            'telefono' => $request->input('cel'),
            'fechaN' => $request->input('nacimiento'),
            'rol' => 'coach',
            'direccion' => $request->input('direccion'),
            'foto' => $fotoPath,  // foto por defecto
        ]);

        auth()->login($user);
        // Guardar usuario
       
        session()->flash('success', '¡Cuenta creada!');
        return view('auth.registerCoach');
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
    
        // Verificar la contraseña
        if ($password != $user->password) {
            return back()->withErrors([
                'message' => 'La contraseña es incorrecta. Por favor, intente de nuevo.',
            ]);
        }
    
        auth()->login($user);
    
        return redirect('/home');
    }
    public function update(Request $request)
    {
         $user=User::findOrFail(auth()->user()->id) ;
        $data = $request->only('name', 'apellidoP', 'apellidoM', 'carnet','telefono','direccion');       
        $user->update($data);
        session()->flash('success', 'Se ha actualizado sus datos correctamente.');

        return redirect()->back();
    }
}
