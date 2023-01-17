<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DiplomadoController;
use App\Http\Controllers\MaestriaController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\DoctoradoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//obtencion de cursos
Route::get('/cursos', [CursosController::class, 'CursosListado']);
Route::get('/cursos/{id}', [CursosController::class, 'CursosListadoPorId']);
//obtencion de diplomados
Route::get('/diplomados', [DiplomadoController::class, 'DiplomadosListado']);
Route::get('/diplomados/{id}', [DiplomadoController::class, 'DiplomadosListadoPorId']);
//obtencion de maestrias
Route::get('/maestrias', [MaestriaController::class, 'MaestriasListado']);
Route::get('/maestrias/{id}', [MaestriaController::class, 'MaestriasListadoPorId']);
//obtencion de especialidades
Route::get('/especialidades', [EspecialidadController::class, 'EspecialidadesListado']);
Route::get('/especialidades/{id}', [EspecialidadController::class, 'EspecialidadesListadoPorId']);
//obtencion de doctorados
Route::get('/doctorados', [DoctoradoController::class, 'DoctoradosListado']);
Route::get('/doctorados/{id}', [DoctoradoController::class, 'DoctoradosListadoPorId']);