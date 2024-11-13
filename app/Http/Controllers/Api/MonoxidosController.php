<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Monoxido_de_Carbono;
use Symfony\Component\HttpFoundation\Response;

class MonoxidosController extends Controller
{
    //MOSTRAR
    public function index(){

        $monoxido_de_carbono = Monoxido_de_Carbono::all();

        return response()->json([
            "result" => $monoxido_de_carbono
        ], Response::HTTP_OK);
    }

    //GUARDAR
        //SOLO PARA PRUEBAS

    public function store (Request $request){
        $monoxido_de_carbono = new Monoxido_de_Carbono();

        $monoxido_de_carbono -> nivel_co = $request -> nivel_co;

        $monoxido_de_carbono -> save();

        $monoxido_de_carbono -> json (['result'=>$monoxido_de_carbono], Response::HTTP_CREATED);
    }
}
