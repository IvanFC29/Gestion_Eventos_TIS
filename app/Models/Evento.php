<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    protected $fillable = ['id', 'nombre', 'descripcion', 'fecha_inicio', 'fecha_fin', 'tipo', 'estado'];
}
