<?php

namespace App\Http\Controllers;

use App\Models\RegistroCompetencias;
use Illuminate\Http\Request;
use App\Models\RegistroEv;
require public_path('fpdf/fpdf.php');
class reporteController extends Controller
{
   
    public function mostrarRegistrosPDF(Request $request)
    {
        $idEvento = $request->input('nombre');
        $registros = RegistroEv::where('eventoinscrito', $idEvento)->get();

        $pdf = new \FPDF();
        $pdf->AddPage();

        // Configurar el contenido del PDF
        $pdf->SetFont('Arial', 'B', 20); // Font regular

        // Título del PDF
        $pdf->Cell(0, 10,'Listado de inscritos ' , 0, 1, 'C'); // Alineación centrada
        $pdf->Ln(10); // Salto de línea

        // Cabecera de la tabla
        $pdf->SetFont('Arial', 'B', 10); // Font en negrita

        // Establecer color de fondo para los encabezados
        $pdf->SetFillColor(243, 84, 50); // R, G, B
        $pdf->Cell(20, 10, 'ID', 1, 0, 'C', true); // El último parámetro indica si se llena el fondo
        $pdf->Cell(30, 10, 'Evento Inscrito', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Nombre', 1, 0, 'C', true);
        $pdf->Cell(40, 10, 'Apellidos', 1, 0, 'C', true);
        $pdf->Cell(40, 10, 'Correo', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Telefono', 1, 0, 'C', true);
        $pdf->Ln(); // Salto de línea

        // Datos de la tabla
        $id = 1;
        foreach ($registros as $registro) {
            $pdf->SetFont('Arial', '', 10); // Volver a la fuente regular
            $pdf->Cell(20, 10, $id, 1);
            $pdf->Cell(30, 10, utf8_decode($registro->eventoinscrito), 1);
            $pdf->Cell(30, 10, utf8_decode($registro->nombre), 1);
            $pdf->Cell(40, 10, utf8_decode($registro->apellidos), 1);
            $pdf->Cell(40, 10, utf8_decode($registro->correo), 1);
            $pdf->Cell(30, 10, $registro->telefono, 1);
            $pdf->Ln(); // Salto de línea
            $id++;
        }

        // Devolver el PDF como una respuesta
        $pdf->Output('I'); // 'I' muestra el PDF directamente en el navegador
        exit; // Asegúrate de detener la ejecución después de enviar el PDF
    }
    public function mostrarRegistrosComPDF(Request $request)
    {
        $idEvento = $request->input('nombre');
        $registros = RegistroCompetencias::where('nombreComp', $idEvento)->get();
    
        $pdf = new \FPDF();
        $pdf->AddPage();
    
        // Configurar el contenido del PDF
        $pdf->SetFont('Arial', 'B', 20); // Font regular
    
        // Título del PDF
        $pdf->Cell(0, 10,'Listado de inscritos ' , 0, 1, 'C'); // Alineación centrada
        $pdf->Ln(5); // Salto de línea
    
        // Subtítulo
        $pdf->SetFont('Arial', 'I', 12); // Font en cursiva
        $pdf->Cell(0, 15, ' Competencia: '.$idEvento, 0, 1, 'L'); // Alineación izquierda
        $pdf->Ln(5); // Salto de línea
    
        // Cabecera de la tabla
        $pdf->SetFont('Arial', 'B', 10); // Font en negrita
    
        // Establecer color de fondo para los encabezados
        $pdf->SetFillColor(243, 84, 50); // R, G, B
        $pdf->Cell(10, 10, 'ID', 1, 0, 'C', true); // El último parámetro indica si se llena el fondo
    
        $pdf->Cell(35, 10, 'Nombre del Equipo', 1, 0, 'C', true);
        $pdf->Cell(35, 10, 'Miembro_1', 1, 0, 'C', true);
        $pdf->Cell(35, 10, 'Miembro_2', 1, 0, 'C', true);
        $pdf->Cell(35, 10, 'Miembro_3', 1, 0, 'C', true);
        $pdf->Cell(45, 10, 'Coach Encargado', 1, 0, 'C', true);
        $pdf->Ln(); // Salto de línea
    
        // Datos de la tabla
        $id = 1;
        foreach ($registros as $registro) {
            $pdf->SetFont('Arial', '', 10); // Volver a la fuente regular
            $pdf->Cell(10, 10, $id, 1);
            
            $pdf->Cell(35, 10, utf8_decode($registro->nombreEquipo), 1);
            $pdf->Cell(35, 10, utf8_decode($registro->nombre1), 1);
            $pdf->Cell(35, 10, utf8_decode($registro->nombre2), 1);
            $pdf->Cell(35, 10, utf8_decode($registro->nombre3), 1);
            $pdf->Cell(45, 10, $registro->coachEncargado, 1);
            $pdf->Ln(); // Salto de línea
            $id++;
        }
    
        // Devolver el PDF como una respuesta
        $pdf->Output('I'); // 'I' muestra el PDF directamente en el navegador
        exit; // Asegúrate de detener la ejecución después de enviar el PDF
    }
    public function mostrarResultadoC(Request $request)
    {
        $idEvento = $request->input('nombre');
        $registros = RegistroCompetencias::where('nombreComp', $idEvento)
                               ->orderBy('puntaje', 'desc') // Ordenar por 'puntaje' de mayor a menor
                               ->get();
        $pdf = new \FPDF();
        $pdf->AddPage();
    
        // Configurar el contenido del PDF
        $pdf->SetFont('Arial', 'B', 20); // Font regular
    
        // Título del PDF
        $pdf->Cell(0, 10,'Resultados ' , 0, 1, 'C'); // Alineación centrada
        $pdf->Ln(5); // Salto de línea
    
        // Subtítulo
        $pdf->SetFont('Arial', 'I', 12); // Font en cursiva
        $pdf->Cell(0, 15, ' Competencia: '.$idEvento, 0, 1, 'L'); // Alineación izquierda
        $pdf->Ln(5); // Salto de línea
    
        // Cabecera de la tabla
        $pdf->SetFont('Arial', 'B', 10); // Font en negrita
    
        // Establecer color de fondo para los encabezados
        $pdf->SetFillColor(243, 84, 50); // R, G, B
        $pdf->Cell(20, 10, 'Lugar', 1, 0, 'C', true); // El último parámetro indica si se llena el fondo
    
        $pdf->Cell(35, 10, 'Nombre del Equipo', 1, 0, 'C', true);
        $pdf->Cell(35, 10, 'Miembro_1', 1, 0, 'C', true);
        $pdf->Cell(35, 10, 'Miembro_2', 1, 0, 'C', true);
        $pdf->Cell(35, 10, 'Miembro_3', 1, 0, 'C', true);
       
        $pdf->Cell(35, 10, 'Puntaje', 1, 0, 'C', true);
        $pdf->Ln(); // Salto de línea
    
        // Datos de la tabla
        $id = 1;
        foreach ($registros as $registro) {
            $pdf->SetFont('Arial', '', 10); // Volver a la fuente regular
        
            // Verificar si el ID es menor o igual a 3 para las primeras tres filas
            if ($id <= 3) {
                // Establecer un color de fondo diferente para las primeras tres filas
                $pdf->SetFillColor(243, 208, 50); // R, G, B - Puedes ajustar los valores de color según tus preferencias
            } else {
                // Establecer un color de fondo diferente para el resto de las filas
                $pdf->SetFillColor(255, 255, 255); // R, G, B - Puedes ajustar los valores de color según tus preferencias
            }
        
            $pdf->Cell(20, 10, $id, 1, 0, 'C', true); // El último parámetro indica si se llena el fondo
        
            $pdf->Cell(35, 10, utf8_decode($registro->nombreEquipo), 1, 0, 'C', true);
            $pdf->Cell(35, 10, utf8_decode($registro->nombre1), 1, 0, 'C', true);
            $pdf->Cell(35, 10, utf8_decode($registro->nombre2), 1, 0, 'C', true);
            $pdf->Cell(35, 10, utf8_decode($registro->nombre3), 1, 0, 'C', true);
          
            $pdf->Cell(35, 10, $registro->puntaje, 1, 0, 'C', true);
            $pdf->Ln(); // Salto de línea
            $id++;
        }
        // Devolver el PDF como una respuesta
        $pdf->Output('I'); // 'I' muestra el PDF directamente en el navegador
        exit; // Asegúrate de detener la ejecución después de enviar el PDF
    }
    public function mostrarResultadoE(Request $request)
    {
        $idEvento = $request->input('nombre');
        $registros = RegistroEv::where('eventoinscrito', $idEvento)
                               ->orderBy('puntaje', 'desc') // Ordenar por 'puntaje' de mayor a menor
                               ->get();

        $pdf = new \FPDF();
        $pdf->AddPage();
    
        // Configurar el contenido del PDF
        $pdf->SetFont('Arial', 'B', 20); // Font regular
    
        // Título del PDF
        $pdf->Cell(0, 10, 'Resultados del Evento: ' . $idEvento, 0, 1, 'C'); // Alineación centrada
        $pdf->Ln(10); // Salto de línea
    
        // Cabecera de la tabla
        $pdf->SetFont('Arial', 'B', 10); // Font en negrita
    
        // Establecer color de fondo para los encabezados
        $pdf->SetFillColor(243, 84, 50); // R, G, B
        $pdf->Cell(20, 10, 'Lugar', 1, 0, 'C', true); // El último parámetro indica si se llena el fondo
        $pdf->Cell(30, 10, 'Evento Inscrito', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Nombre', 1, 0, 'C', true);
        $pdf->Cell(40, 10, 'Apellidos', 1, 0, 'C', true);
        $pdf->Cell(40, 10, 'Correo', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Puntaje', 1, 0, 'C', true);
        $pdf->Ln(); // Salto de línea
    
        // Datos de la tabla
        $id = 1;
        foreach ($registros as $index => $registro) {
            $pdf->SetFont('Arial', '', 10); // Volver a la fuente regular
    
            // Verificar si la fila actual está dentro de las primeras tres filas
            if ($index < 3) {
                // Establecer color de fondo diferente para las primeras tres filas
                $pdf->SetFillColor(243, 208, 50); // R, G, B
            } else {
                $pdf->SetFillColor(255, 255, 255); // Restaurar color de fondo blanco para filas restantes
            }
    
            $pdf->Cell(20, 10, $id, 1, 0, 'C', true);
            $pdf->Cell(30, 10, utf8_decode($registro->eventoinscrito), 1, 0, 'C', true);
            $pdf->Cell(30, 10, utf8_decode($registro->nombre), 1, 0, 'C', true);
            $pdf->Cell(40, 10, utf8_decode($registro->apellidos), 1, 0, 'C', true);
            $pdf->Cell(40, 10, utf8_decode($registro->correo), 1, 0, 'C', true);
            $pdf->Cell(30, 10, $registro->puntaje, 1, 0, 'C', true);
            $pdf->Ln(); // Salto de línea
            $id++;
        }
    
        // Devolver el PDF como una respuesta
        $pdf->Output('I'); // 'I' muestra el PDF directamente en el navegador
        exit; // Asegúrate de detener la ejecución después de enviar el PDF
    }
    public function mostrarResultadoEU(Request $request)
    {
        $idEvento = $request->input('nombre');
        $registros = RegistroEv::where('eventoinscrito', $idEvento)
                               ->orderBy('puntaje', 'desc') // Ordenar por 'puntaje' de mayor a menor
                               ->get();

        $pdf = new \FPDF();
        $pdf->AddPage();
    
        // Configurar el contenido del PDF
        $pdf->SetFont('Arial', 'B', 20); // Font regular
    
        // Título del PDF
        $pdf->Cell(0, 10, 'Resultados del Evento: ' . $idEvento, 0, 1, 'C'); // Alineación centrada
        $pdf->Ln(10); // Salto de línea
    
        // Cabecera de la tabla
        $pdf->SetFont('Arial', 'B', 10); // Font en negrita
    
        // Establecer color de fondo para los encabezados
        $pdf->SetFillColor(243, 84, 50); // R, G, B
        $pdf->Cell(20, 10, 'Lugar', 1, 0, 'C', true); // El último parámetro indica si se llena el fondo
       
        $pdf->Cell(40, 10, 'Nombre', 1, 0, 'C', true);
        $pdf->Cell(40, 10, 'Apellidos', 1, 0, 'C', true);
        $pdf->Cell(40, 10, 'Correo', 1, 0, 'C', true);
        $pdf->Cell(30, 10, 'Puntaje', 1, 0, 'C', true);
        $pdf->Ln(); // Salto de línea
    
        // Datos de la tabla
        $id = 1;
        foreach ($registros as $index => $registro) {
            $pdf->SetFont('Arial', '', 10); // Volver a la fuente regular
    
            // Verificar si la fila actual está dentro de las primeras tres filas
            if ($index < 3) {
                // Establecer color de fondo diferente para las primeras tres filas
                $pdf->SetFillColor(243, 208, 50); // R, G, B
            } else {
                $pdf->SetFillColor(255, 255, 255); // Restaurar color de fondo blanco para filas restantes
            }
    
            $pdf->Cell(20, 10, $id, 1, 0, 'C', true);
        
            $pdf->Cell(40, 10, utf8_decode($registro->nombre), 1, 0, 'C', true);
            $pdf->Cell(40, 10, utf8_decode($registro->apellidos), 1, 0, 'C', true);
            $pdf->Cell(40, 10, utf8_decode($registro->correo), 1, 0, 'C', true);
            $pdf->Cell(30, 10, $registro->puntaje, 1, 0, 'C', true);
            $pdf->Ln(); // Salto de línea
            $id++;
        }
    
        // Devolver el PDF como una respuesta
        $pdf->Output('I'); // 'I' muestra el PDF directamente en el navegador
        exit; // Asegúrate de detener la ejecución después de enviar el PDF
    }
}
