<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Competencia;
use App\Models\RegistroEv;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

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
        $evento->requisitos = $request->input('requisitos');
        $evento->reglas = $request->input('reglas');
        $evento->links = $request->input('links');
        $evento->infextra = $request->input('infextra');
        $evento->contenido = $request->input('contenido');
        $evento->cronograma = $request->input('cronograma');
        $evento->costo = $request->input('costo');
        $evento->umss = $request->input('umss');
        
        // afiche por defecto
        $afichePath = 'images/afiches/aficheEdit.jpg';
        $evento->afiche = $afichePath;
  
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
        $listados = Evento::where('editable',0)->get();

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
        $competencia->correo_referencia = $request2->input('email');
        $competencia->cel_referencia = $request2->input('telefonoCompetencia');
        $competencia->requisitos = $request2->input('requisitos');
        $competencia->reglas = $request2->input('reglas');
        $competencia->links = $request2->input('links');
        $competencia->infextra = $request2->input('infextra');
        $competencia->costo = $request2->input('costo');
        $competencia->costo = $request2->input('actividades');
        $competencia->umss = $request2->input('umss');
        
        // Buscar competencias repetidas
        $correo_existente = Competencia::where('nombre', $competencia->nombre)->count();
        if ($competencia_existente > 0) {
            session()->flash('error', 'El nombre de la Competencia ya existe en la base de datos');
        }else{
            $competencia->save();
            session()->flash('success', '¡Competencia guardado!');
        }
        return view('nueva_Competencias');
    }
    
    public function registroUsuEvent(Request $request3){
        $registroevento = new RegistroEv();
        $registroevento->eventoinscrito=$request3->input('eventoinscrito');
        $registroevento->nombre = $request3->input('nombre');
        $registroevento->apellidos = $request3->input('apellidos');
        $registroevento->correo = $request3->input('correo');
        $registroevento->telefono = $request3->input('telefono');
        $registroevento->edad = $request3->input('edad');
        
        $correo_existente = RegistroEv::where('correo', $registroevento->correo)->count();
        if ($correo_existente > 0) {
            session()->flash('error', 'Este correo ya está registrado en este Evento');
        }else{
            $registroevento->save();
            session()->flash('success', '¡Registro Completado!');
        }
        return view('frontend.index');
    }

    // EventoController.php

    public function buscarEventos(Request $request)
    {
        $query = $request->input('query');

        // Puedes utilizar el modelo para realizar la búsqueda en la base de datos
        $resultados = Evento::where('nombre', 'LIKE', '%' . $query . '%')
                        ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
                        ->get();

        return view('resultados', ['resultados' => $resultados]);
    }

    public function registrarUsCompetencia(){
        return view('registro_competencias');
    }
    public function registroUsuComp(Request $request4){
        $registroCompetencia = new RegistroCompetencias();
        //$registroCompetencia->eventoinscrito=$request3->input('eventoinscrito');
        $registroCompetencia->nombre = $request4->input('nombreEquipo');
        $registroCompetencia->apellidos = $request4->input('nombre1');
        $registroCompetencia->correo = $request4->input('email1');
        $registroCompetencia->telefono = $request4->input('celular1');
        $registroCompetencia->edad = $request4->input('sis1');
        $registroCompetencia->apellidos = $request4->input('nombre2');
        $registroCompetencia->correo = $request4->input('email2');
        $registroCompetencia->telefono = $request4->input('celular2');
        $registroCompetencia->edad = $request4->input('sis2');
        $registroCompetencia->apellidos = $request4->input('nombre3');
        $registroCompetencia->correo = $request4->input('email3');
        $registroCompetencia->telefono = $request4->input('celular3');
        $registroCompetencia->edad = $request4->input('sis3');
        $registroCompetencia->apellidos = $request4->input('nombre4');
        $registroCompetencia->correo = $request4->input('email4');
        $registroCompetencia->telefono = $request4->input('celular4');
        $registroCompetencia->edad = $request4->input('sis4');
        
        $correo_existente = RegistroEv::where('correo', $registroCompetencia->correo)->count();
        if ($correo_existente > 0) {
            session()->flash('error', 'Este correo ya está registrado en este Evento');
        }else{
            $registroCompetencia->save();
            session()->flash('success', '¡Registro Completado!');
        }
        return view('frontend.index');
    }
}
