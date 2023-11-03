<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model implements Authenticatable
{
    use HasFactory;
    protected $table = 'participante';
    protected $filable = ['id', 'nombre', 'apellidoP', 'apellidoM', 'email', 'carnet', 'universidad', 'celular', 'fecha_nacimiento'];

    public function getAuthIdentifierName()
    {
        return 'email'; // Nombre de la columna que se usa como identificador en la autenticación.
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->carnet; // Nombre de la columna que almacena la contraseña real.
    }

    public function getRememberToken()
    {
        return $this->remember_token; // Nombre de la columna que almacena el token de recordatorio.
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Nombre de la columna que almacena el token de recordatorio.
    }
}
