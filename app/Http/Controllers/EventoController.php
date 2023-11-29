<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Competencia;
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
        $listados = Competencia::get();

        /*foreach ($listados as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }*/
    
        return view('competenciasAdmin', compact('listados'));

    }

    public function mostrarFormulario($nombre)
    {
        return view('formcompetencias')->with('nombre', $nombre);
    }
    
    public function crearCompetencias(){
        
        return view('nueva_Competencias');
    }

    public function guardarCompetencia(Request $request2){
        $competencia = new Competencia();
        $competencia->nombre = $request2->input('nombre');
        $competencia->descripcion = $request2->input('descripcionCompetencia');
        $competencia->fecha_inicio = $request2->input('fechaInicio');
        $competencia->fecha_fin = $request2->input('fechaFin');
        $competencia->ubicacion = $request2->input('ubicacionCompetencia');
        $competencia->reglas = $request2->input('reglasCompetencia');
        $competencia->requisitos = $request2->input('requisitosCompetencia');
        $competencia->link = $request2->input('linkInsCompetencia');
        $competencia->correo_referencia = $request2->input('email');
        $competencia->cel_referencia = $request2->input('telefonoCompetencia');
        
        // Buscar competencias repetidas
        $competencia_existente = Competencia::where('nombre', $competencia->nombre)->count();
        if ($competencia_existente > 0) {
            session()->flash('error', 'El nombre de la Competencia ya existe en la base de datos');
        }else{
            $competencia->save();
            session()->flash('success', '¡Competencia guardado!');
        }
        return view('nueva_Competencias');
    }
    
    public function registroUsuEvent(Request $request3){
        $competencia = new Competencia();
        $competencia->nombre = $request3->input('nombre');
        $competencia->apellidos = $request3->input('apellidos');
        $competencia->correo = $request3->input('correo');
        $competencia->telefono = $request3->input('telefono');
        $competencia->edad = $request3->input('edad');
        
        return view('frontend.index');
    }
}
