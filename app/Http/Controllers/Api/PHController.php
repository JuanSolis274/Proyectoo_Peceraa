<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PH;
use Symfony\Component\HttpFoundation\Response;

class PHController extends Controller
{   //MOSTRAR
    public function index(){
        
        $ph = PH::all();

        return response()->json([
            "result" => $ph
        ], Response::HTTP_OK);
    }

    //GUARDAR
        //SOLO PARA PRUEBAS
    /*public function store(Request $request) {
        $ph = new PH();
    
        $ph -> nivel_ph = $request -> nivel_ph;
    
        $ph->save();
    
        return response()-> json(['result'=>$ph], Response::HTTP_CREATED);
    } */


}
