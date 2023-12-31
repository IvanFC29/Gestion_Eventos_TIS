<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroCompetencias extends Model
{
    protected $table = 'registrocompetencias';
    protected $fillable = ['nombreComp', 'nombreEquipo', 'nombre1', 'email1', 'celular1', 'sis1', 'nombre2', 'email2', 'celular2', 'sis2', 'nombre3', 'email3', 'celular3', 'sis3', 'nombre4', 'email4', 'celular4', 'sis4', 'coachEncargado'];
}
