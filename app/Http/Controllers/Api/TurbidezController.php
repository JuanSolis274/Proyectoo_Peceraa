<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Turbidez;
use Symfony\Component\HttpFoundation\Response;

class TurbidezController extends Controller
{
    //MOSTRAR
    public function index(){

        $turbidez = Turbidez::all();

        return response()->json ([
            "result" => $temperatura
        ], Response::HTTP_OK);
    }

    //GUARDAR
    /*public function store(Request $request){
        $temperatura = new Temperatura();

        $temperatura -> temperatura = $request -> temperatura;

        $temperatura -> save();

        return response() -> json (['result'=>$temperatura], Response::HTTP_CREATED);
    }*/
}
