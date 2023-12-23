<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use App\Models\Competencia;
use App\Models\RegistroEv;
use App\Models\RegistroCompetencias;
use App\Models\Estudiantes;
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
        $evento->requisitos = $request->input('requisitos');
        $evento->reglas = $request->input('reglas');
        $evento->links = $request->input('links');
        $evento->infextra = $request->input('infextra');
        $evento->contenido = $request->input('contenido');
        $evento->cronograma = $request->input('cronograma');
        $evento->costo = $request->input('costo');
        
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

    public function buscarCompetencias(Request $request)
    {
        $query = $request->input('query');

        // Puedes utilizar el modelo para realizar la búsqueda en la base de datos
        $resultados = Competencia::where('nombreComp', 'LIKE', '%' . $query . '%')
                    ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
                    ->orWhere('fecha_inicio', 'LIKE', '%' . $query . '%')
                    ->orWhere('fecha_fin', 'LIKE', '%' . $query . '%')
                    ->orWhere('ubicacionCompetencia', 'LIKE', '%' . $query . '%')
                    ->orWhere('correo_referencia', 'LIKE', '%' . $query . '%')
                    ->orWhere('cel_referencia', 'LIKE', '%' . $query . '%')
                    ->orWhere('requisitos', 'LIKE', '%' . $query . '%')
                    ->orWhere('reglas', 'LIKE', '%' . $query . '%')
                    ->orWhere('links', 'LIKE', '%' . $query . '%')
                    ->orWhere('infextra', 'LIKE', '%' . $query . '%')
                    ->orWhere('costo', 'LIKE', '%' . $query . '%')
                    ->orWhere('actividades', 'LIKE', '%' . $query . '%')
                    ->orWhere('umss', 'LIKE', '%' . $query . '%')
                    ->orWhere('numeroParticipantes', 'LIKE', '%' . $query . '%')
                    ->get();

        return view('resultadosC', ['listados' => $resultados]);
    }
    public function buscarCompetenciasU(Request $request)
    {
        $query = $request->input('query');

        // Puedes utilizar el modelo para realizar la búsqueda en la base de datos
        $resultados = Competencia::where('nombreComp', 'LIKE', '%' . $query . '%')
                    ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
                    ->orWhere('fecha_inicio', 'LIKE', '%' . $query . '%')
                    ->orWhere('fecha_fin', 'LIKE', '%' . $query . '%')
                    ->orWhere('ubicacionCompetencia', 'LIKE', '%' . $query . '%')
                    ->orWhere('correo_referencia', 'LIKE', '%' . $query . '%')
                    ->orWhere('cel_referencia', 'LIKE', '%' . $query . '%')
                    ->orWhere('requisitos', 'LIKE', '%' . $query . '%')
                    ->orWhere('reglas', 'LIKE', '%' . $query . '%')
                    ->orWhere('links', 'LIKE', '%' . $query . '%')
                    ->orWhere('infextra', 'LIKE', '%' . $query . '%')
                    ->orWhere('costo', 'LIKE', '%' . $query . '%')
                    ->orWhere('actividades', 'LIKE', '%' . $query . '%')
                    ->orWhere('umss', 'LIKE', '%' . $query . '%')
                    ->orWhere('numeroParticipantes', 'LIKE', '%' . $query . '%')
                    ->get();

        return view('resultadosCU', ['listados' => $resultados]);
    }

    
    
    public function crearCompetencias(){
        
        return view('nueva_Competencias');
    }

    public function guardarCompetencia(Request $request2){
        $competencia = new Competencia();
        $competencia->nombreComp = $request2->input('nombreComp');
        $competencia->descripcion = $request2->input('descripcionCompetencia');
        $competencia->fecha_inicio = $request2->input('fechaInicio');
        $competencia->fecha_fin = $request2->input('fechaFin');
        $competencia->ubicacionCompetencia = $request2->input('ubicacionCompetencia');
        $competencia->correo_referencia = $request2->input('email');
        $competencia->cel_referencia = $request2->input('telefonoCompetencia');
        $competencia->requisitos = $request2->input('requisitos');
        $competencia->reglas = $request2->input('reglas');
        $competencia->links = $request2->input('links');
        $competencia->infextra = $request2->input('infextra');
        $competencia->costo = $request2->input('costo');
        $competencia->costo = $request2->input('actividades');
        $competencia->umss = $request2->input('umss');
        $competencia->numeroParticipantes = $request2->input('numeroParticipantes');
        
        // Buscar competencias repetidas
        $competencia_existente = Competencia::where('nombreComp', $competencia->nombreComp)->count();
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
            $request3->session()->flash('success', '¡Registro Completado! Los datos se han guardado correctamente.');
        }
        return view('registro-eventos')->with('nombre', $request3->input('eventoinscrito'));
    }

    // EventoController.php

    public function buscarEventos(Request $request)
    {
        $query = $request->input('query');

        // Puedes utilizar el modelo para realizar la búsqueda en la base de datos
        $resultados = Evento::where('nombre', 'LIKE', '%' . $query . '%')
                        ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
                        ->orWhere('fecha_inicio', 'LIKE', '%' . $query . '%')
                        ->orWhere('fecha_fin', 'LIKE', '%' . $query . '%')
                        ->orWhere('tipo', 'LIKE', '%' . $query . '%')
                        ->orWhere('editable', 'LIKE', '%' . $query . '%')
                        ->orWhere('correo_referencia', 'LIKE', '%' . $query . '%')
                        ->orWhere('cel_referencia', 'LIKE', '%' . $query . '%')
                        ->orWhere('afiche', 'LIKE', '%' . $query . '%')
                        ->orWhere('requisitos', 'LIKE', '%' . $query . '%')
                        ->orWhere('reglas', 'LIKE', '%' . $query . '%')
                        ->orWhere('links', 'LIKE', '%' . $query . '%')
                        ->orWhere('infextra', 'LIKE', '%' . $query . '%')
                        ->orWhere('contenido', 'LIKE', '%' . $query . '%')
                        ->orWhere('cronograma', 'LIKE', '%' . $query . '%')
                        ->orWhere('costo', 'LIKE', '%' . $query . '%')
                        ->get();

        return view('resultados', ['resultados' => $resultados]);
    }
    public function buscarEventosA(Request $request)
    {
        $query = $request->input('query');

        // Puedes utilizar el modelo para realizar la búsqueda en la base de datos
        $resultados = Evento::where('nombre', 'LIKE', '%' . $query . '%')
                        ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
                        ->orWhere('fecha_inicio', 'LIKE', '%' . $query . '%')
                        ->orWhere('fecha_fin', 'LIKE', '%' . $query . '%')
                        ->orWhere('tipo', 'LIKE', '%' . $query . '%')
                        ->orWhere('editable', 'LIKE', '%' . $query . '%')
                        ->orWhere('correo_referencia', 'LIKE', '%' . $query . '%')
                        ->orWhere('cel_referencia', 'LIKE', '%' . $query . '%')
                        ->orWhere('afiche', 'LIKE', '%' . $query . '%')
                        ->orWhere('requisitos', 'LIKE', '%' . $query . '%')
                        ->orWhere('reglas', 'LIKE', '%' . $query . '%')
                        ->orWhere('links', 'LIKE', '%' . $query . '%')
                        ->orWhere('infextra', 'LIKE', '%' . $query . '%')
                        ->orWhere('contenido', 'LIKE', '%' . $query . '%')
                        ->orWhere('cronograma', 'LIKE', '%' . $query . '%')
                        ->orWhere('costo', 'LIKE', '%' . $query . '%')
                        ->get();

        return view('resultadosA', ['resultados' => $resultados]);
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

    
    public function registrarUsCompetencia($nombreComp){
        $umssValue = Competencia::where('nombreComp', $nombreComp)->value('umss');
        $cantInscritos = Competencia::where('nombreComp', $nombreComp)->value('numeroParticipantes');
        return view('registro_competencias')->with(['nombreComp' => $nombreComp, 'umss' => $umssValue , 'numIntegrantes'=>$cantInscritos]);
    }
    public function registroUsuComp(Request $request4){
        //
        $registroCompetencia = new RegistroCompetencias();
        $lacompetencia = $registroCompetencia->nombreComp;
        $umssValue = Competencia::where('nombreComp', $request4->input('nombreComp'))->value('umss');
        $cantInscritos = Competencia::where('nombreComp', $request4->input('nombreComp'))->value('numeroParticipantes');
        $sis1Exists = Estudiantes::where('codigosis', $request4->input('sis1'))->exists();
        $sis2Exists = Estudiantes::where('codigosis', $request4->input('sis2'))->exists();

        if($umssValue == "Si"){
            // Si el código SIS no existe, mostrar un mensaje de error
            if (!$sis1Exists) {
                $request4->session()->flash('error', '¡Error! El código SIS del participante 1 no existe en la base de datos.');
                return view('registro_competencias')->with(['nombreComp' => $registroCompetencia->nombreComp, 'umss' => $umssValue , 'numIntegrantes'=>$cantInscritos]);
            }else{
                if(!$sis2Exists){
                    $request4->session()->flash('error', '¡Error! El código SIS del participante 2 no existe en la base de datos.');
                    return view('registro_competencias')->with(['nombreComp' => $registroCompetencia->nombreComp, 'umss' => $umssValue , 'numIntegrantes'=>$cantInscritos]);
                }
            }
        }
        $registroCompetencia->sis3 = $request4->input('sis3');
        if (!empty($registroCompetencia->sis3)) {
            $sis3Exists = Estudiantes::where('codigosis', $request4->input('sis3'))->exists();

            // Si el código SIS no existe, mostrar un mensaje de error
            if (!$sis3Exists) {
                $request4->session()->flash('error', '¡Error! El código SIS  del participante 3 no existe en la base de datos.');
                return view('registro_competencias')->with(['nombreComp' => $registroCompetencia->nombreComp, 'umss' => $umssValue , 'numIntegrantes'=>$cantInscritos]);
            }
        }    
        $registroCompetencia->sis4 = $request4->input('sis4');
        if (!empty($registroCompetencia->sis4)) {
            $sis4Exists = Estudiantes::where('codigosis', $request4->input('sis4'))->exists();

            // Si el código SIS no existe, mostrar un mensaje de error
            if (!$sis4Exists) {
                $request4->session()->flash('error', '¡Error! El código SIS  del participante 4 no existe en la base de datos.');
                return view('registro_competencias')->with(['nombreComp' => $registroCompetencia->nombreComp, 'umss' => $umssValue , 'numIntegrantes'=>$cantInscritos]);
            }
        } 
        $registroCompetencia->nombreComp=$request4->input('nombreComp');
        $registroCompetencia->nombreEquipo = $request4->input('nombreEquipo');
        $registroCompetencia->nombre1 = $request4->input('nombre1');
        $registroCompetencia->email1 = $request4->input('email1');
        $registroCompetencia->celular1 = $request4->input('celular1');
        $registroCompetencia->sis1 = $request4->input('sis1');
        $registroCompetencia->nombre2 = $request4->input('nombre2');
        $registroCompetencia->email2 = $request4->input('email2');
        $registroCompetencia->celular2 = $request4->input('celular2');
        $registroCompetencia->sis2 = $request4->input('sis2');
        $registroCompetencia->nombre3 = $request4->input('nombre3');
        $registroCompetencia->email3 = $request4->input('email3');
        $registroCompetencia->celular3 = $request4->input('celular3');
        $registroCompetencia->sis3 = $request4->input('sis3');
        $registroCompetencia->nombre4 = $request4->input('nombre4');
        $registroCompetencia->email4 = $request4->input('email4');
        $registroCompetencia->celular4 = $request4->input('celular4');
        $registroCompetencia->sis4 = $request4->input('sis4');
        $registroCompetencia->coachEncargado = $request4->input('coachEncargado');
        $registroCompetencia->save();
        $request4->session()->flash('success', '¡Registro exitoso! Tu equipo se ha inscrito correctamente.');
        return view('registro_competencias')->with(['nombreComp' => $registroCompetencia->nombreComp, 'umss' => $umssValue , 'numIntegrantes'=>$cantInscritos]);
        
    }
    public function mostrarRegistrosComPDF(Request $request) {
        // Obtener el ID del evento desde la URL
        $nombreC = $request->input('nombre');  
        //dd($nombreC);
        // Obtener registros asociados al evento
        $registros = RegistroCompetencias::where('nombreComp', $nombreC)->get();
    
       // Devolver la vista de registros en PDF con los registros obtenidos
        //return view('pdf')->with('registros', $registros);
        $pdf= App::make ('dompdf.wrapper');
        //$path=resource_path('views/eventos-vista');
        $pdf->loadView('pdfCompetencia',['registros' => $registros]);
    
        return $pdf->stream();
    }
    public function mostrarResultadoC(Request $request)
    {
        // Obtener el ID del evento desde la URL
        $nomCompetencia = $request->input('nombre');  
        
        // Obtener registros asociados al evento y ordenar por 'puntaje' de mayor a menor
        $registros = RegistroCompetencias::where('nombreComp', $nomCompetencia)
                               ->orderBy('puntaje', 'desc') // Ordenar por 'puntaje' de mayor a menor
                               ->get();
    
        // Devolver la vista de registros en PDF con los registros obtenidos
       // dd($registros);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdfComRes', ['registros' => $registros]);
    
        return $pdf->stream();
    }
    public function mostrarResultadoE(Request $request)
    {
        // Obtener el ID del evento desde la URL
        $nomEvento = $request->input('nombre');  
        
        // Obtener registros asociados al evento y ordenar por 'puntaje' de mayor a menor
        $registros = RegistroEv::where('eventoinscrito', $nomEvento)
                               ->orderBy('puntaje', 'desc') // Ordenar por 'puntaje' de mayor a menor
                               ->get();
    
        // Devolver la vista de registros en PDF con los registros obtenidos
       //dd($registros);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdfEveRes', ['registros' => $registros]);
    
        return $pdf->stream();
    }
    








    /*public function validarSIS(Request $request) {
        $sis = $request->input('sis');

        $exists = Estudiantes::where('codigosis', $sis)->exists();

        return response()->json(['exists' => $exists]);
    }*/
    public function mostrarCompetenciasCoach() {
        $listados = Competencia::get();

        /*foreach ($listados as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }*/
    
        return view('vistaCoach', compact('listados'));

    }
    public function mostrarCompetenciasUsuario() {
        $listados = Competencia::get();

        /*foreach ($listados as $i) {
            $i->fecha_inicio = Carbon::parse($i->fecha_inicio);
            $i->fecha_fin = Carbon::parse($i->fecha_fin);
        }*/
    
        return view('competencias_Usuario', compact('listados'));

    }
}
