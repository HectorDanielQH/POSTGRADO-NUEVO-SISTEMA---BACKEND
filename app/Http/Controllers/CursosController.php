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
}
