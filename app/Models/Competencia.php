<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $table = 'competencias';
    protected $fillable = ['id', 'nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'correo_referencia', 'cel_referencia', 'requisitos', 'reglas', 'links', 'infextra', 'costo', 'actividades', 'umss'];
}
