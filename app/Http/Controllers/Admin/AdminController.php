<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\testMail;
use App\Mail\EmailCoach;

class AdminController extends Controller
{
    public function index(){
        return view('admin1.adminpage');
        
    }
    public function login(){
   
       printf("hola");
       
       if (auth()->attempt(request(['email', 'password'])) == false) {
        return back()->withErrors([
            'message' => 'The email or password is incorrect'
        ]);
        }else{
            return redirect()->to('admin.adminpage');
            }
    }

    public function editorCorreo(){
        return view('enviarCorreoCoach');
    }

    public function sendmail(){
        $mailR= request('email');
        $details= request('contenido');

        $user = User::where('email', $mailR)->first();

        if ($user) {
            Mail::to($mailR)->send(new EmailCoach($details));
            session()->flash('success', 'La cuenta fue enviada al coach con exito.');
            return redirect()->back();
        }
        
        else{
            return back()->withErrors([
                  'message' => 'Hubo un problema al enviar la cuenta, verifique el correo.',
            ]);
        }
    }
}
