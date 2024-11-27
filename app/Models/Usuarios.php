<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Usuarios extends Model
{
    protected $connection = 'mongodb'; // Conexión MongoDB
    protected $collection = 'Pecera';  // Colección Pecera

    protected $fillable = [
        'nombre_pecera',
        'usuarios',
        'sensores'
    ];

    // Método para obtener el arreglo de usuarios
    public function getUsuarios()
    {
        return $this->attributes['usuarios'] ?? [];
    }
}
