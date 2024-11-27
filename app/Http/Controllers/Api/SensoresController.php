<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; // Importa el controlador base
use App\Models\Sensores;
use Illuminate\Http\Request;

class SensoresController extends Controller
{
    // Obtener todos los sensores de una pecera específica
    public function index($pecera_id)
    {
        $pecera = Sensores::find($pecera_id);

        if (!$pecera) {
            return response()->json(['message' => 'Pecera no encontrada'], 404);
        }

        return response()->json($pecera->getSensores());
    }

    // Agregar un nuevo sensor a una pecera
    public function store(Request $request, $pecera_id)
    {
        $pecera = Sensores::find($pecera_id);

        if (!$pecera) {
            return response()->json(['message' => 'Pecera no encontrada'], 404);
        }

        $sensor = [
            'nombre' => $request->input('nombre'),
            'valor' => $request->input('valor'),
            'fecha' => now()->toDateTimeString()
        ];

        $pecera->push('sensores', $sensor); // Agrega el sensor al arreglo
        $pecera->save();

        return response()->json(['message' => 'Sensor agregado correctamente', 'sensor' => $sensor]);
    }
}
