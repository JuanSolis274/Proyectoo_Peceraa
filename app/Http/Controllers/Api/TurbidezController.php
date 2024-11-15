<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Turbidez;
use App\Models\Turbidez as ModelsTurbidez;
use Symfony\Component\HttpFoundation\Response;

class TurbidezController extends Controller
{
    //MOSTRAR
    public function index(){

        $turbidez = ModelsTurbidez::all();

        return response()->json ([
            "result" => $turbidez
        ], Response::HTTP_OK);
    }

    //GUARDAR
    /*public function store(Request $request){
        $turbidez = new ModelsTurbidez();

        $turbidez -> nivel_de_turbidez = $request -> nivel_de_turbidez;

        $turbidez -> save();

        return response() -> json (['result'=>$turbidez], Response::HTTP_CREATED);
    }*/
}
