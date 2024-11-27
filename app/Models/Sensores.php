<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Sensores extends Model
{
    protected $connection = 'mongodb'; // Conexión MongoDB
    protected $collection = 'Pecera';  // Colección Pecera

    protected $fillable = [
        'nombre_pecera', 
        'usuarios', 
        'sensores'
    ];

    // Método para obtener el arreglo de sensores
    public function getSensores()
    {
        return $this->attributes['sensores'] ?? [];
    }
}
