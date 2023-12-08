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
            'foto' => 'images/fotos/foto_default.jpg', 
        ]);

        auth()->login($user);
        // Guardar usuario
       
        session()->flash('success', '¡Cuenta creada!');
        return view('auth.registerCoach');
    }

    public function store(){
        $email = request('email');
        $password = request('password');
        $fotoPath = 'images/fotos/foto_default.jpg';
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
        $user = User::findOrFail(auth()->user()->id);
        $data = $request->only('name', 'apellidoP', 'apellidoM', 'carnet', 'telefono', 'direccion');
    
        // Actualizar otros datos
        $user->update($data);
    
        // Manejo de la imagen
        if ($request->hasFile('foto')) {
            // Almacenar la imagen en la carpeta public/images/fotoPerfil
            $imagePath = $request->file('foto')->store('public/images/fotosPerfil');
    
            // Obtener el nombre del archivo de la imagen
            $imageName = basename($imagePath);
    
            // Actualizar el campo 'foto' en el modelo User con el nombre de la nueva imagen
            $user->update(['foto' => $imageName]);
        }
    
        session()->flash('success', 'Se ha actualizado sus datos correctamente.');
        return redirect()->back();
    }
    

    
}
