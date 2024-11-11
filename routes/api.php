<?php

use App\Http\Controllers\Api\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(UsuariosController::class)->group(function (){
    Route::get('/usuarios', 'index');
    Route::post('/usuario', 'store');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario_eliminar/{id}', 'destroy');
});


