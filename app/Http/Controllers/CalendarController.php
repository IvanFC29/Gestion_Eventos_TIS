<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Competencia;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->ajax()) {
            $eventos = Evento::all();
            
            $data = [];
            foreach ($eventos as $evento) {
                $data[] = [
                    'title' => $evento->nombre, // Reemplaza 'titulo' con el nombre real de tu columna de título
                    'start' => $evento->fecha_inicio, // Reemplaza 'fecha_inicio' con el nombre real de tu columna de fecha de inicio
                    'end' => $evento->fecha_fin, // Reemplaza 'fecha_fin' con el nombre real de tu columna de fecha de fin
                ];
            }
    
            return response()->json($data);
        }
    
        return view('full-calendar');
    }
    public function indexC(Request $request)
    {
    	if ($request->ajax()) {
            $eventos = Evento::all();
            
            $data = [];
            foreach ($eventos as $evento) {
                $data[] = [
                    'title' => $evento->nombre, // Reemplaza 'titulo' con el nombre real de tu columna de título
                    'start' => $evento->fecha_inicio, // Reemplaza 'fecha_inicio' con el nombre real de tu columna de fecha de inicio
                    'end' => $evento->fecha_fin, // Reemplaza 'fecha_fin' con el nombre real de tu columna de fecha de fin
                ];
            }
    
            return response()->json($data);
        }
    
        return view('vistaCalendarioC');
    }


}
