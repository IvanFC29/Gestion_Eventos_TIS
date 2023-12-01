<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroEv extends Model
{
    protected $table = 'registro_eventos';
    protected $fillable = ['nombre', 'apellidos', 'correo', 'telefono', 'edad'];
}
