<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('universidades', App\Http\Controllers\UniversidadController::class)->middleware('auth');
Route::resource('facultades', App\Http\Controllers\FacultadController::class)->middleware('auth');
Route::resource('carreras', App\Http\Controllers\CarreraController::class)->middleware('auth');
Route::resource('tipoprogramas', App\Http\Controllers\TipoProgramaController::class)->middleware('auth');
Route::resource('programas', App\Http\Controllers\ProgramaController::class)->middleware('auth');
Route::resource('convenios', App\Http\Controllers\ConvenioController::class)->middleware('auth');
Route::resource('coordinadores', App\Http\Controllers\CoordinadorController::class)->middleware('auth');
Route::resource('administradores', App\Http\Controllers\AdministradorController::class)->middleware('auth');
Route::get('registroprofesional/{id}',[App\Http\Controllers\EstudianteController::class, 'createProfesional'])->name('registro');
Route::get('registroestudiante/{id}',[App\Http\Controllers\EstudianteController::class, 'createEstudiante'])->name('registro');
Route::post('estudiantes',[App\Http\Controllers\EstudianteController::class, 'store'])->name('estudiantes.store');
Route::get('verlista/{id}',[App\Http\Controllers\EstudianteController::class, 'verlista'])->name('verlista');
Route::delete('estudiantes/{id}',[App\Http\Controllers\EstudianteController::class, 'destroy'])->name('estudiantes.destroy');
/*pdf*/
//anular middleware auth
Route::get('pdf/{id}/{pid}',[App\Http\Controllers\EstudianteController::class, 'pdfFormulario'])->name('pdf');
Route::get('pdf2/{id}/{pid}',[App\Http\Controllers\EstudianteController::class, 'pdfCarta'])->name('pdfcarta');