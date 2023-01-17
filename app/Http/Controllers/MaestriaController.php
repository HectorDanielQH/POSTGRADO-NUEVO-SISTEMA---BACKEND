<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;
use App\Models\TipoPrograma;

class MaestriaController extends Controller
{
    //retornar datos api
    function MaestriasListado(){
        $tipoprograma=TipoPrograma::where('nombre','MAESTRIA')->get();
        $maestrias = Programa::where('estadoPrograma','Activo')
                            ->where('tipoPrograma_id',$tipoprograma[0]->id)
                            ->get();
        return response()->json($maestrias);
    }
    function MaestriasListadoPorId($id){
        $maestrias = Programa::where('id',$id)->get();
        return response()->json($maestrias);
    }
}
