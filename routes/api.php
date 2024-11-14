<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuariosController;
use App\Http\Controllers\Api\PHController;
use App\Http\Controllers\Api\MonoxidosController;
use App\Http\Controllers\Api\Nivel_de_AguaController;
use App\Http\Controllers\Api\TemperaturaController;
use App\Http\Controllers\Api\TurbidezController;
use App\Http\Controllers\Api\Nivel_de_AguaControllerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//USUARIOS
Route::controller(UsuariosController::class)->group(function (){
    Route::get('/usuarios', 'index');
    Route::post('/usuario', 'store');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario_eliminar/{id}', 'destroy');
});

//PH
Route::controller(PHController::class)->group(function(){
    Route::get('/ph_mostar','index');

    //SOLO PARA PRUEBAS
    //Route::post('ph','store');
});

//MONOXIDO DE CARBONO
Route::controller(MonoxidosController::class)->group(function(){
    Route::get('/monoxido_mostrar', 'index');

    //SOLO PARA PRUEBAS
    //Route::post('monoxido', 'store');
});

//TEMPERATURA
Route::controller(TemperaturaController::class)->group(function(){
    Route::get('/temperatura_mostrar', 'index');

    //SOLO PRUEBAS
    //Route::post('temperatura', 'store');
});

//TURBIDEZ
Route::controller(TurbidezController::class)->group(function(){
    Route::get('/turbidez_mostrar', 'index');

    //SOLO PRUEBAS
    Route::post('turbidez', 'store');
});

//NIVEL DE AGUA
Route::controller(Nivel_de_AguaController::class)->group(function(){
    Route::get('/nivel_de_agua_mostar','index');

    //SOLO PRUEBAS
    Route::post('nivel_de_agua', 'store');
});