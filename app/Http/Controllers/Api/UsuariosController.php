<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Obtener todos los usuarios de una pecera específica.
     *
     * @param string $pecera_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($pecera_id)
    {
        $pecera = Usuarios::find($pecera_id);

        if (!$pecera) {
            return response()->json(['message' => 'Pecera no encontrada'], 404);
        }

        return response()->json($pecera->getUsuarios());
    }

    /**
     * Agregar un nuevo usuario a una pecera.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $pecera_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, $pecera_id)
{
    $pecera = Usuarios::find($pecera_id);

    if (!$pecera) {
        return response()->json(['message' => 'Pecera no encontrada'], 404);
    }

    // Validación de los datos del usuario
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email',
        'contraseña' => 'required|string|min:8',
    ]);

    // Verificar si el email ya existe dentro del documento de la pecera
    if (collect($pecera->usuarios)->pluck('email')->contains($validated['email'])) {
        return response()->json(['message' => 'El email ya está registrado para esta pecera'], 422);
    }

    // Crear el nuevo usuario con la fecha de creación
    $usuario = [
        'nombre' => $validated['nombre'],
        'email' => $validated['email'],
        'contraseña' => Hash::make($validated['contraseña']),
        'fecha_creacion' => now()->toDateTimeString(),  // Agregar la fecha de creación
    ];

    // Agregar el usuario al campo 'usuarios'
    $pecera->push('usuarios', $usuario);
    $pecera->save();

    return response()->json(['message' => 'Usuario agregado correctamente', 'usuario' => $usuario]);
}

}
