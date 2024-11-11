<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';

    protected $attributes = [
        'rol' => 'normal', // Valor predeterminado para el campo rol
    ];

    // Método para hashear la contraseña automáticamente
    public function setContraseñaAttribute($value)
    {
        $this->attributes['contraseña'] = Hash::make($value);
    }
}
