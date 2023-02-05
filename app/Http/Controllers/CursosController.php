<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\TipoPrograma;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //retornar datos api
    function CursosListado(){
        $tipoprograma=TipoPrograma::where('nombre','CURSO')->get();
        $cursos = Programa::where('estadoPrograma','Activo')
                            ->where('tipoPrograma_id',$tipoprograma[0]->id)
                            ->get();
        return response()->json($cursos);
    }
    function CursosListadoPorId($id){
        $cursos = Programa::where('id',$id)->get();
        return response()->json($cursos);
    }
    function CursosListadoContar(){
        $tipoprograma=TipoPrograma::where('nombre','CURSO')->get();
        $cursos = Programa::select('carrera_id')
                            ->selectRaw("count('carrera_id') as total")
                            ->where('estadoPrograma','Activo')
                            ->where('tipoPrograma_id',$tipoprograma[0]->id)
                            ->groupBy('carrera_id')
                            ->count();
        return response()->json($cursos);
    }
}
