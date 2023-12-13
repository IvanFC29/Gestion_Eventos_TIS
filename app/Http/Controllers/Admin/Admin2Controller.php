<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAviso;

class Admin2Controller extends Controller
{

    public function sendmail(){
        $mailR= request('email');
        $details= request('contenido');

        $user = User::where('email', $mailR)->first();

        if ($user) {
            Mail::to($mailR)->send(new EmailAviso($details));
            session()->flash('success', 'El aviso ha sido enviado.');
            return redirect()->back();
        }
        
        else{
            return back()->withErrors([
                  'message' => 'Hubo un problema, verifique el correo.',
            ]);
        }
    }
}
