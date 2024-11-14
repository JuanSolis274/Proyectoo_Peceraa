<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Temperatura;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TemperaturaController extends Controller
{
    //MOSTRAR
    public function index(){

        $temperatura = Temperatura::all();

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
