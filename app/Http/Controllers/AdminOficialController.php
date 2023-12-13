<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\testMail;

class AdminOficialController extends Controller {
    
   
    
    public function loginC() {
        
        return view('auth.loginCoach');
    }
    public function create() {
        
        return view('auth.login');
    }
     public function recuperarC() {
        
        return view('auth.RecuperarContra');
    }
    public function sendmail(){
       
        $mailR= request('email');
        $user = User::where('email', $mailR)->first();

        if ($user) {
            $details = $user->password;
            Mail::to($mailR)->send(new testMail($details));
            session()->flash('success', 'Su contraseña se  envio a su correo electrónico, verifique su correo.');
            return redirect()->back();
        }
        
        else{
            return back()->withErrors([
                  'message' => 'El correo electrónico no existe en nuestra base de datos. Por favor, verifique su correo.',
            ]);
        }
}
    public function store() {
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
        if ('admin' != $user->rol) {
            return back()->withErrors([
                'message' => 'Datos incorrectos',
            ]);
        }
    
        auth()->login($user);
    
        return redirect('/home');
    }
    

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
