<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $table = 'participante';
    protected $filable = ['id', 'nombre', 'apellidoP', 'apellidoM', 'email', 'carnet', 'universidad', 'celular', 'fecha_nacimiento'];

}
