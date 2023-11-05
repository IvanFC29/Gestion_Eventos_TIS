<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Coach extends Model
{
    use HasFactory;
    protected $table = 'coach';
    protected $filable = ['id', 'nombre', 'apellidoP', 'apellidoM', 'correoInstitucional', 'institucion', 'telefono', 'direccion', 'email', 'password'];

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
        return $this->password; // Nombre de la columna que almacena la contraseña real.
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
