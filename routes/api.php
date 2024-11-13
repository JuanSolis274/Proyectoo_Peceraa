<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuariosController;
use App\Http\Controllers\Api\PHController;
use App\Http\Controllers\Api\MonoxidosController;

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
    Route::post('monoxido', 'store');
});

