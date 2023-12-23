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
            $competencias = Competencia::all();

            $data = [];
            foreach ($eventos as $evento) {
                $data[] = [
                    'title' => $evento->nombre, 
                    'start' => $evento->fecha_inicio, 
                    'end' => $evento->fecha_fin, 
                    'color' => '#dd983d',
                ];
            }

            foreach ($competencias as $competencia) {
                $data[] = [
                    'title' => $competencia->nombreComp,
                    'start' => $competencia->fecha_inicio, 
                    'end' => $competencia->fecha_fin, 
                    'color' => '#48bbbe',
                ];
            }
            // Marcando feriados específicos:
            $data[] = [   
                'title' => 'Día de la Independencia',
                'start' => '2023-08-06',
                'end' => '2023-08-07',   // Fin del feriado (si aplica)
                'color' => '#FF0000',   
            
                'title' => 'Navidad',
                'start' => '2023-12-25',
                'color' => '#16c210', 
            
            ];
            return response()->json($data);
        }

        return view('full-calendar');
    }

}
