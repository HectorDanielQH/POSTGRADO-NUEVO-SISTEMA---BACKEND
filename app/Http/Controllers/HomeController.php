<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Convenio;
use App\Models\Facultad;
use App\Models\Programa;
use App\Models\TipoPrograma;
use App\Models\Universidad;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $administradores = User::Role('administrador')->get()->count();
        $coordinadores = User::Role('coordinador')->get()->count();
        $estudiantes = User::Role('estudiante')->get()->count();
        $universidades = Universidad::all()->count();
        $facultades = Facultad::all()->count();
        $carreras = Carrera::all()->count();
        $tipoprogramas = TipoPrograma::all()->count();
        $convenios = Convenio::all()->count();
        $programas =Programa::all()->count();

        return view('home', compact('administradores', 'coordinadores', 'universidades', 'facultades', 'carreras', 'programas', 'estudiantes', 'tipoprogramas', 'convenios'));
    }
}
