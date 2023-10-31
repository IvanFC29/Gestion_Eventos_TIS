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
}
