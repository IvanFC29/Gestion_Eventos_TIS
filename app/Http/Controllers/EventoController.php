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
        $evento->estado = true;
        $evento->save();

        return redirect('/')->with('success', 'Evento creado exitosamente');

        return "Evento guardado en la base de datos.";
    }
}
