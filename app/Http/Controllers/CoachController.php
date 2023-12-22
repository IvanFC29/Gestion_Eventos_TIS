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

    public function storeCoach() {
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
    
        // Si llegas a este punto, el correo y la contraseña son correctos
        if ('coach' != $user->rol) {
            return back()->withErrors([
                'message' => 'Datos incorrectos',
            ]);
        }
    
        auth()->login($user);
    
        return redirect('/competencias-coach');
    }
   
    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
    
        $request->validate([
            'name' => 'required|regex:/^[A-Za-z\s]+$/',
            'apellidoP' => 'required|regex:/^[A-Za-z\s]+$/',
            'apellidoM' => 'required|regex:/^[A-Za-z\s]+$/',
            'carnet' => 'required|numeric|digits_between:6,8',
            'telefono' => 'required|numeric|digits_between:6,8',
            'direccion' => 'required|regex:/^[A-Za-z\s]+$/',
          
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'name.regex' => 'El campo nombre solo debe contener letras y espacios.',
            'apellidoP.required' => 'El campo apellido paterno es obligatorio.',
            'apellidoP.regex' => 'El campo apellido paterno solo debe contener letras y espacios.',
            'apellidoM.required' => 'El campo apellido materno es obligatorio.',
            'apellidoM.regex' => 'El campo apellido materno solo debe contener letras y espacios.',
            'carnet.required' => 'El campo carnet es obligatorio.',
            'carnet.numeric' => 'El campo carnet solo debe contener números.',
            'carnet.digits_between' => 'El campo carnet debe tener entre :min y :max dígitos.',
            'telefono.required' => 'El campo teléfono es obligatorio.',
            'telefono.numeric' => 'El campo teléfono solo debe contener números.',
            'telefono.digits_between' => 'El campo teléfono debe tener entre :min y :max dígitos.',
            'direccion.required' => 'El campo dirección es obligatorio.',
            'direccion.regex' => 'El campo dirección solo debe contener letras y espacios.',
            
        ]);
    
        $data = $request->only('name', 'apellidoP', 'apellidoM', 'carnet', 'telefono', 'direccion');
    
        // Actualizar otros datos
        $user->update($data);
    
        // Manejo de la imagen
        if ($request->hasFile('foto')) {
            // Almacenar la imagen en la carpeta public/images/fotoPerfil
            $imagePath = $request->file('foto')->store('public/images/fotosPerfil');
    
            // Obtener el nombre del archivo de la imagen
            $imageName = basename($imagePath);
    
            // Eliminar la foto anterior
            if ($user->foto != '') {
                unlink(storage_path('app/public/images/fotosPerfil/' . $user->foto));
            }
    
            // Actualizar el campo 'foto' en el modelo User con el nombre de la nueva imagen
            $user->update(['foto' => $imageName]);
        }
    
        session()->flash('success', 'Se ha actualizado sus datos correctamente.');
        return redirect()->back();
    }
    
}
