<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use App\Models\Competencia;
use App\Models\RegistroEv;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    public function index(){
        // Funcion para traer el evento mas proximo
        $fecha_actual = now();

        $eventos_cercanos = Evento::where('editable', 0)
        ->where('fecha_inicio', '>=', $fecha_actual)
        ->orderBy('fecha_inicio', 'asc') 
        ->get();
        
        // Funcion para mostrar los eventos pasados
        $eventos_pasados = Evento::where('editable', 0)
        ->where('fecha_inicio', '<', $fecha_actual)
        ->orderBy('fecha_inicio', 'asc') 
        ->get();

        foreach ($eventos_cercanos as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }
    
        foreach ($eventos_pasados as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }
    
        return view('eventos_admin', compact('eventos_cercanos', 'eventos_pasados')); 
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
        $evento->costo = $request->input('costoevento');
        $evento->emailCoach = $request->input('elcoach');

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

    public function editarEvento($id) {
        $evento_editar = Evento::find($id);
        return view('editarEvento', ['id' => $id], compact('evento_editar'));
    }

    public function modificar(Request $request, $id){
        $evento = Evento::findOrFail($id);

        // Actualizar los campos del evento con los datos del formulario
        $evento->nombre = $request->input('nombre');
        $evento->descripcion = $request->input('descripcionevento');
        $evento->fecha_inicio = $request->input('fechaEventoInicio');
        $evento->fecha_fin = $request->input('fechaEventoFin');
        $evento->tipo = $request->input('tipoEvento');
        $evento->costo = $request->input('costoevento');
        $evento->correo_referencia = $request->input('email');
        $evento->cel_referencia = $request->input('telefonoevento');
        $evento->emailCoach = $request->input('elcoach');

        // Guardar el evento actualizado en la base de datos
        $evento->save();
        session()->flash('success', '¡Evento editado exitosamente!');
    
        return redirect()->back();    
    }
    
    public function notificarCambio($emailCoach, $id) {
        $coach = User::where('email', $emailCoach)->first();
        $evento = Evento::find($id);
        return view('correoEventEdit', compact('evento','coach'));
    }

    public function uEventos(){
        $fecha_actual = now();
        $listados = Evento::where('editable', 0)
        ->where('fecha_inicio', '<', $fecha_actual)
        ->orderBy('fecha_inicio', 'asc') 
        ->get();

        $proximos = Evento::where('editable', 0)
        ->where('fecha_inicio', '>=', $fecha_actual)
        ->orderBy('fecha_inicio', 'asc') 
        ->get();
 
        foreach ($listados as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }
    
        return view('eventosusuario', compact('listados', 'proximos'));
        
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
    public function mostrarEventos()
    {
        $registros = RegistroEv::where('eventoinscrito', 'Curso de ORM gratis')->get();
    $pdf= App::make ('dompdf.wrapper');
    //$path=resource_path('views/eventos-vista');
    $pdf->loadView('pdf',['registros' => $registros]);

    return $pdf->stream();
    }
    public function listarEventos()
    {
        // Obtener eventos desde el modelo (o desde donde sea que los estés obteniendo)
        $eventos = Evento::all();

        // Pasar los eventos a la vista
        return view('reporteEventos')->with('eventos', $eventos);
    }
 
    public function mostrarRegistrosPDF(Request $request) {
        // Obtener el ID del evento desde la URL
        $idEvento = $request->input('nombre');  
        //dd($idEvento);
        // Obtener registros asociados al evento
        $registros = RegistroEv::where('eventoinscrito', $idEvento)->get();

       // Devolver la vista de registros en PDF con los registros obtenidos
        //return view('pdf')->with('registros', $registros);
        $pdf= App::make ('dompdf.wrapper');
        //$path=resource_path('views/eventos-vista');
        $pdf->loadView('pdf',['registros' => $registros]);
    
        return $pdf->stream();
    }
    public function listarCompetencias()
    {
        // Obtener eventos desde el modelo (o desde donde sea que los estés obteniendo)
        $competencias = Competencia::all();

        // Pasar los eventos a la vista
        return view('reporteCompetencias')->with('competencias', $competencias);
    }

    public function mostrarRegistrosPDFCcom(Request $request) {
        // Obtener el ID del evento desde la URL
        $idEvento = $request->input('nombre');  
        //dd($idEvento);
        // Obtener registros asociados al evento
        $registros = RegistroEv::where('eventoinscrito', $idEvento)->get();

       // Devolver la vista de registros en PDF con los registros obtenidos
        //return view('pdf')->with('registros', $registros);
        $pdf= App::make ('dompdf.wrapper');
        //$path=resource_path('views/eventos-vista');
        $pdf->loadView('pdf',['registros' => $registros]);
    
        return $pdf->stream();
    }
    public function filtrarEventosl(Request $request)
{
    $filtroTipo = $request->input('filtroTipo');
    $filtroTexto = $request->input('filtroTexto');

    // Lógica para filtrar eventos
    $eventos = Evento::when($filtroTipo, function ($query) use ($filtroTipo, $filtroTexto) {
        // Seleccionar el tipo de filtro y aplicar la condición correspondiente
        switch ($filtroTipo) {
            case 'nombre':
                $query->where('nombre', 'LIKE', '%' . $filtroTexto . '%');
                break;
            case 'tipoEvento':
                $query->where('tipo', 'LIKE', '%' . $filtroTexto . '%');
                break;
            case 'correoReferencia':
                $query->where('correo_referencia', 'LIKE', '%' . $filtroTexto . '%');
                break;
            case 'numeroReferencia':
                $query->where('cel_referencia', 'LIKE', '%' . $filtroTexto . '%');
                break;
            // Puedes agregar más casos según sea necesario
        }

        return $query;
    })->get();

    return view('reporteEventos', compact('eventos'));
}
public function filtrarEventos(Request $request)
{
    $fechaInicio = $request->input('fechaInicio');
    $fechaFin = $request->input('fechaFin');
    $filtroTipo = $request->input('filtroTipo');
    $filtroTexto = $request->input('filtroTexto');

    // Convertir las fechas al formato deseado (YYYY-MM-DD)
    $fechaInicio = $fechaInicio ? date('Y-m-d', strtotime($fechaInicio)) : null;
    $fechaFin = $fechaFin ? date('Y-m-d', strtotime($fechaFin)) : null;

    // Lógica para filtrar eventos
    $eventos = Evento::when($filtroTipo, function ($query) use ($filtroTipo, $filtroTexto) {
        // Seleccionar el tipo de filtro y aplicar la condición correspondiente
        switch ($filtroTipo) {
            case 'nombre':
                $query->where('nombre', 'LIKE', '%' . $filtroTexto . '%');
                break;
            case 'tipoEvento':
                $query->where('tipo', 'LIKE', '%' . $filtroTexto . '%');
                break;
            case 'correoReferencia':
                $query->where('correo_referencia', 'LIKE', '%' . $filtroTexto . '%');
                break;
            case 'numeroReferencia':
                $query->where('cel_referencia', 'LIKE', '%' . $filtroTexto . '%');
                break;
            // Puedes agregar más casos según sea necesario
        }

        return $query;
    })
    ->when(($fechaInicio && $fechaFin) || (!$fechaInicio && !$fechaFin), function ($query) use ($fechaInicio, $fechaFin) {
        // Aplicar las condiciones de fecha solo si ambas fechas están presentes o ambas están ausentes
        if ($fechaInicio && $fechaFin) {
            $query->where(function ($subquery) use ($fechaInicio, $fechaFin) {
                $subquery->whereBetween('fecha_inicio', [$fechaInicio, $fechaFin])
                    ->orWhereBetween('fecha_fin', [$fechaInicio, $fechaFin])
                    ->orWhere(function ($innerSubquery) use ($fechaInicio, $fechaFin) {
                        $innerSubquery->where('fecha_inicio', '<=', $fechaInicio)
                            ->where('fecha_fin', '>=', $fechaInicio);
                    });
            });
        }

        return $query;
    })
    ->get();

    return view('reporteEventos', compact('eventos'));
}


public function filtrarCompetencias(Request $request)
{
    $fechaInicio = $request->input('fechaInicio');
    $fechaFin = $request->input('fechaFin');
    $filtroTipo = $request->input('filtroTipo');
    $filtroTexto = $request->input('filtroTexto');

    // Convertir las fechas al formato deseado (YYYY-MM-DD)
    $fechaInicio = $fechaInicio ? date('Y-m-d', strtotime($fechaInicio)) : null;
    $fechaFin = $fechaFin ? date('Y-m-d', strtotime($fechaFin)) : null;

    // Lógica para filtrar eventos
    $competencias = Competencia::when($filtroTipo, function ($query) use ($filtroTipo, $filtroTexto) {
        // Seleccionar el tipo de filtro y aplicar la condición correspondiente
        switch ($filtroTipo) {
            case 'nombre':
                $query->where('nombreComp', 'LIKE', '%' . $filtroTexto . '%');
                break;
            
            case 'correoReferencia':
                $query->where('correo_referencia', 'LIKE', '%' . $filtroTexto . '%');
                break;
            case 'numeroReferencia':
                $query->where('cel_referencia', 'LIKE', '%' . $filtroTexto . '%');
                break;
            // Puedes agregar más casos según sea necesario
        }

        return $query;
    })
    ->when(($fechaInicio && $fechaFin) || (!$fechaInicio && !$fechaFin), function ($query) use ($fechaInicio, $fechaFin) {
        // Aplicar las condiciones de fecha solo si ambas fechas están presentes o ambas están ausentes
        if ($fechaInicio && $fechaFin) {
            $query->where(function ($subquery) use ($fechaInicio, $fechaFin) {
                $subquery->whereBetween('fecha_inicio', [$fechaInicio, $fechaFin])
                    ->orWhereBetween('fecha_fin', [$fechaInicio, $fechaFin])
                    ->orWhere(function ($innerSubquery) use ($fechaInicio, $fechaFin) {
                        $innerSubquery->where('fecha_inicio', '<=', $fechaInicio)
                            ->where('fecha_fin', '>=', $fechaInicio);
                    });
            });
        }

        return $query;
    })
    ->get();

    return view('reporteCompetencias', compact('competencias'));
}

    
}
