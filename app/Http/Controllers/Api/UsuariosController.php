<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class UsuariosController extends Controller
{
    //Mostrar
    public function index() {
        $usuario = Usuarios::all();

        return response()->json([
            "result" => $usuario
        ], Response::HTTP_OK);
    }
    //Guardar
    public function store(Request $request) {
        $usuario = new Usuarios();

        $usuario -> nombre = $request -> nombre;
        $usuario -> correo = $request -> correo;
        $usuario -> contraseña = $request -> contraseña;

        $usuario->save();

        return response()-> json(['result'=>$usuario], Response::HTTP_CREATED);
    } 
    //Actualizar
    public function update(Request $request, $id) {
       $usuario = Usuarios::findOrFail($request->id);

       $usuario -> nombre = $request -> nombre;
       $usuario -> correo = $request -> correo;
       $usuario -> contraseña = $request -> contraseña;

       $usuario->save();

       return response()-> json(['result'=>$usuario], Response::HTTP_OK);

    }
    //Eliminar
    public function destroy($id) {
        Usuarios::destroy($id);

        return response()-> json(['message'=> "Deleted"], Response::HTTP_OK);
    }
}
