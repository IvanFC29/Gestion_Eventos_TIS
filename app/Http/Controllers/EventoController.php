<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        $lista = Evento::all();
        return view('eventos_admin', compact('lista')); 
    }

    public function crearEvento(){
        return view('nuevo_evento');
    }

    public function guardarEvento(Request $request){
        $evento = new Evento();
        $evento->nombre = $request->input('nombre');
        $evento->descripcion = $request->input('descripcionevento');
        $evento->fecha_inicio = $request->input('fechaEventoInicio');
        $evento->fecha_fin = $request->input('fechaEventoFin');
        $evento->tipo = $request->input('tipoEvento');
        $evento->editable = $request->input('editable');
        $evento->correo_referencia = $request->input('email');
        $evento->cel_referencia = $request->input('telefonoevento');
        $evento->id_trabajo = 2;
        $evento->save();

        return redirect('/eventos')->with('success', 'Evento creado exitosamente');
    }

    public function verEditables(){
        $lista_editables = Evento::where('editable',1)->get();
        return view('lista_editables', compact('lista_editables'));
    }
}
