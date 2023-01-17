<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\TipoPrograma;
use Illuminate\Http\Request;

class DiplomadoController extends Controller
{
    //retornar datos api
    function DiplomadosListado(){
        $tipoprograma=TipoPrograma::where('nombre','DIPLOMADO')->get();
        $diplomados = Programa::where('estadoPrograma','Activo')
                            ->where('tipoPrograma_id',$tipoprograma[0]->id)
                            ->get();
        return response()->json($diplomados);
    }
    function DiplomadosListadoPorId($id){
        $diplomados = Programa::where('id',$id)->get();
        return response()->json($diplomados);
    }
}
