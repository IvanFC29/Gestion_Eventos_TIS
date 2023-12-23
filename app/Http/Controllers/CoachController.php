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
    public function guardarCoach(Request $request)
    {
        // Mensajes personalizados
        $messages = [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.alpha' => 'El nombre solo puede contener letras.',
            'apellidoP.required' => 'El apellido paterno es obligatorio.',
            'apellidoP.alpha' => 'El apellido paterno solo puede contener letras.',
            'apellidoM.required' => 'El apellido materno es obligatorio.',
            'apellidoM.alpha' => 'El apellido materno solo puede contener letras.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Ingresa un correo electrónico válido.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.string' => 'La contraseña debe ser una cadena de texto.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.max' => 'La contraseña no puede tener más de :max caracteres.',
            
            'universidad.required' => 'La universidad es obligatoria.',
            
            'universidad.alpha' => 'El campo de universidad solo puede contener letras.',
            
        ];
    
        // Reglas de validación
        $request->validate([
            'nombre' => 'required|alpha',
            'apellidoP' => 'required|alpha',
            'apellidoM' => 'required|alpha',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:7|max:15',
            'universidad' => 'required|alpha',         
            
        ], $messages);
    
        // Crear el usuario
        $user = User::create([
            'name' => $request->input('nombre'),
            'apellidoP' => $request->input('apellidoP'),
            'apellidoM' => $request->input('apellidoM'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'universidad' => $request->input('universidad'),          
            'rol' => 'coach',
            'direccion' => $request->input('direccion'),           
        ]);
    
       // auth()->login($user);
    
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
    public function listarCoachs()
    {
        // Obtener eventos desde el modelo (o desde donde sea que los estés obteniendo)
        $coachs = user::all();

        // Pasar los coachs a la vista
        return view('listaCoach')->with('coachs', $coachs);
    }
    public function filtrarCoachs(Request $request)
{
    $filtroTipo = $request->input('filtroTipo');
    $filtroTexto = $request->input('filtroTexto');

    // Lógica para filtrar usuarios
    $coachs = User::where('rol', 'coach')
        ->when($filtroTipo, function ($query) use ($filtroTipo, $filtroTexto) {
            // Seleccionar el tipo de filtro y aplicar la condición correspondiente
            switch ($filtroTipo) {
                case 'nombre':
                    $query->where('name', 'LIKE', '%' . $filtroTexto . '%');
                    break;
                case 'paterno':
                    $query->where('apellidoP', 'LIKE', '%' . $filtroTexto . '%');
                    break;
                case 'materno':
                    $query->where('apellidoM', 'LIKE', '%' . $filtroTexto . '%');
                    break;
                case 'correo':
                    $query->where('email', 'LIKE', '%' . $filtroTexto . '%');
                    break;
                case 'universidad':
                    $query->where('universidad', 'LIKE', '%' . $filtroTexto . '%');
                    break;
                // Puedes agregar más casos según sea necesario
            }

            return $query;
        })
        ->get();

    return view('listaCoach', compact('coachs'));
}

}
