<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventoController extends Controller
{
    public function index(){
        $lista = Evento::where('editable',0)->get();

        foreach ($lista as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }
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
        
        // Buscar eventos repetidos
        $evento_existente = Evento::where('nombre', $evento->nombre)->count();
        if ($evento_existente > 0) {
            session()->flash('error', 'El nombre del evento ya existe en la base de datos');
        }else{
            $evento->save();
            session()->flash('success', '¡Evento guardado!');
        }
        return view('nuevo_evento');
    }

    public function verEditables(){
        $lista_editables = Evento::where('editable',1)->get();
        foreach ($lista_editables as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }
        return view('lista_editables', compact('lista_editables'));
    }

























    
    public function uEventos()
    {
        $listados = Evento::get();

        foreach ($listados as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }
    
        return view('eventosusuario', compact('listados'));
        
    }
    public function mostrarFormularioRegistro($nombre) {
        // Puedes pasar el $id a la vista para usarlo en el formulario
        return view('registro-eventos')->with('nombre', $nombre);
    }

    public function mostrarCompetenciasAdmin() {
        $listados = Evento::get();

        foreach ($listados as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }
    
        return view('competenciasAdmin', compact('listados'));

    }

    public function mostrarFormulario($nombre)
    {
        return view('formcompetencias')->with('nombre', $nombre);
    }
    
}
