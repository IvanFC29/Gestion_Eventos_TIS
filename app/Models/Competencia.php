<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $table = 'competencias';
    protected $fillable = ['id', 'nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'ubicacion', 'reglas', 'requisitos', 'link', 'correo_referencia', 'cel_referencia'];
}
