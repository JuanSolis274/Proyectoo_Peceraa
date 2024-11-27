<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; // Importa el controlador base
use Illuminate\Http\Request;
use App\Models\Sensores; // Si es necesario

class PeceraController extends Controller

{
    // Crear una nueva pecera
    public function store(Request $request)
    {
        $pecera = Sensores::create([
            'nombre_pecera' => $request->input('nombre_pecera'),
            'usuarios' => [],
            'sensores' => []
        ]);

        return response()->json(['message' => 'Pecera creada', 'pecera' => $pecera]);
    }

    // Obtener detalles de una pecera específica
    public function show($pecera_id)
    {
        $pecera = Sensores::find($pecera_id);

        if (!$pecera) {
            return response()->json(['message' => 'Pecera no encontrada'], 404);
        }

        return response()->json($pecera);
    }

    // Eliminar una pecera
    public function destroy($pecera_id)
    {
        $pecera = Sensores::find($pecera_id);

        if (!$pecera) {
            return response()->json(['message' => 'Pecera no encontrada'], 404);
        }

        $pecera->delete();

        return response()->json(['message' => 'Pecera eliminada']);
    }
}
