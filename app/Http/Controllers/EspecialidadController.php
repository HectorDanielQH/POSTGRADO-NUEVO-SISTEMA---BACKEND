<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;
use App\Models\TipoPrograma;

class EspecialidadController extends Controller
{
    //retornar datos api
    function EspecialidadesListado(){
        $tipoprograma=TipoPrograma::where('nombre','ESPECILIDAD')->get();
        $especialidades = Programa::where('estadoPrograma','Activo')
                            ->where('tipoPrograma_id',$tipoprograma[0]->id)
                            ->get();
        return response()->json($especialidades);
    }
    function EspecialidadesListadoPorId($id){
        $especialidades = Programa::where('id',$id)->get();
        return response()->json($especialidades);
    }
}
