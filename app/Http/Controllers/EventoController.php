<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        return view('layouts.eventos_admin'); 
    }

    public function crearEvento(){
        return view('layouts.nuevo_evento');
    }

    public function guardarEvento(Request $request){
        $evento = new Evento();
        $evento->nombre = $request->input('nombre');
        $evento->descripcion = $request->input('descripcionevento');
        $evento->fecha_inicio = $request->input('fechaEventoInicio');
        $evento->fecha_fin = $request->input('fechaEventoFin');
        $evento->tipo = $request->input('tipoEvento');
        $evento->editable = true;
        $evento->correo_referencia = $request->input('email');
        $evento->cel_referencia = $request->input('telefonoevento');
        $evento->id_trabajo = 2;
        $evento->save();

        return redirect('/eventos')->with('success', 'Evento creado exitosamente');
    }
}
