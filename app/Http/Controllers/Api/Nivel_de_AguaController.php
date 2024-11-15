<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nivel_de_Agua;
use Symfony\Component\HttpFoundation\Response;

class Nivel_de_AguaController extends Controller
{
    //MOSTRAR
    public function index(){
        $nivel_de_agua = Nivel_de_Agua::all();

        return response()->json([
            "result" => $nivel_de_agua
        ], Response::HTTP_OK);
    }

    //GUARDAR
    /*public function store(Request $request){
        $nivel_de_agua = new Nivel_de_Agua();

        $nivel_de_agua -> nivel_agua = $request -> nivel_agua;

        $nivel_de_agua -> save();

        return response() -> json (['result'=>$nivel_de_agua], Response::HTTP_CREATED);

    }*/

}
