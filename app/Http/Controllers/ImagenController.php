<?php
// app/Http/Controllers/ImagenController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class ImagenController extends Controller
{
   // Dentro de tu controlador

public function guardarImagen(Request $request)
{
    try {
        $imageUrl = $request->input('imageUrl');

        // Obtén el último evento registrado
        $ultimoEvento = Evento::latest()->first();

        // Obtén el nombre del último evento
        $nombreEvento = $ultimoEvento->nombre; // Ajusta el nombre de la columna según tu estructura

        // Guarda la imagen en el directorio public/images con el nombre del evento
        $imagenContenido = file_get_contents($imageUrl);
        file_put_contents(public_path("images/afiches/{$nombreEvento}.png"), $imagenContenido);

        // Actualiza la URL de la imagen en la base de datos asociada al último evento
        $urlImagen = url("images/afiches/{$nombreEvento}.png");
        $ultimoEvento->update(['afiche' => $urlImagen]);

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}



        
}
