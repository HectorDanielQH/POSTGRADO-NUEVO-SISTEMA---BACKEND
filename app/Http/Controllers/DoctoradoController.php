<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;
use App\Models\TipoPrograma;

class DoctoradoController extends Controller
{
    //retornar datos api
    function DoctoradosListado(){
        $tipoprograma=TipoPrograma::where('nombre','DOCTORADO')->get();
        $doctorados = Programa::where('estadoPrograma','Activo')
                            ->where('tipoPrograma_id',$tipoprograma[0]->id)
                            ->get();
        return response()->json($doctorados);
    }
    function DoctoradosListadoPorId($id){
        $doctorados = Programa::where('id',$id)->get();
        return response()->json($doctorados);
    }
}
