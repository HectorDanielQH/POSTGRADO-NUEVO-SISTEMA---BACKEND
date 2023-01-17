<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Convenio;
use App\Models\Facultad;
use App\Models\Programa;
use App\Models\TipoPrograma;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $programas = Programa::all();
        return view('programas.index', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoprogramas = TipoPrograma::all();
        $facultades = Facultad::all();
        $carreras = Carrera::all();
        $convenios = Convenio::all();
        $coordinadores = User::Role('coordinador')->get();
        return view('programas.create',compact('tipoprogramas','facultades','carreras','convenios','coordinadores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar imagen
        $imagen = $request->file('imagenPostgradoAfiche');
        $nombreImagen = time().$imagen->getClientOriginalName();
        //guardar en eorage link
        //$imagen->move(public_path('storage/images'),$nombreImagen);
        $imagen->move(public_path('storage/images'),$nombreImagen);
        $path = "storage/images/".$nombreImagen;
        Programa::create([
            'tipoPrograma_id' => $request->tipoPrograma,
            'facultad_id' => $request->facultad,
            'carrera_id' => $request->carrera,
            'convenio_id' => $request->convenio,
            'nombrePrograma' => $request->nombrePrograma,
            'tituloOtorga' => $request->tituloOtorga,
            'modalidad' => $request->modalidad,
            'cantidadPlazas' => $request->cantidadPlazas,
            'docentes' => $request->docentes,
            'duracion' => $request->duracion,
            'horasAcademicas' => $request->horasAcademicas,
            'creditos' => $request->creditos,
            'horarios' => $request->horarios,
            'becas' => $request->becas,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'whatsapp' => $request->whatsapp,
            'consultorwhatsapp' => $request->consultorwhatsapp,
            'coordinador_id' => $request->coordinadorProgramaPostgrado,
            'coordinadorprograma' => $request->coordinadorPrograma,
            'organizacionCurso' => $request->organizacionCurso,
            'estadoPrograma' => $request->estadoPrograma,
            'costoProfesionales' => $request->costoProfesionales,
            'costoEstudiantes' => $request->costoEstudiantes,
            'primeraCuotaProfesionales' => $request->primeraCuotaProfesionales,
            'primeraCuotaEstudiantes' => $request->primeraCuotaEstudiantes,
            'pagosMensualesProfesionales' => $request->pagosMensualesProfesionales,
            'pagosMensualesEstudiantes' => $request->pagosMensualesEstudiantes,
            'modalidadDiplomado' => $request->modalidadDiplomado,
            'imagen' => $path,
            'objetivos' => $request->objetivos,
            'perfilEstudiante' => $request->perfilEstudiante,
            'presentacion' => $request->presentacion,
            'perfilGraduado' => $request->perfilGraduado,
            'planEstudio' => $request->planEstudio,
            'cronograma' => $request->cronograma,
            'requisitos' => $request->requisitos,
            'mayoresInformes' => $request->mayoresInformes,
            'inversion' => $request->inversion,
        ]);
        return redirect()->route('programas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        $tipoprogramas = TipoPrograma::all();
        $facultades = Facultad::all();
        $carreras = Carrera::all();
        $convenios = Convenio::all();
        $coordinadores = User::Role('coordinador')->get();
        return view('programas.edit',compact('programa','tipoprogramas','facultades','carreras','convenios','coordinadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        $programa->tipoPrograma_id = $request->tipoPrograma;
        $programa->facultad_id = $request->facultad;
        $programa->carrera_id = $request->carrera;
        $programa->convenio_id = $request->convenio;
        $programa->nombrePrograma = $request->nombrePrograma;
        $programa->tituloOtorga = $request->tituloOtorga;
        $programa->modalidad = $request->modalidad;
        $programa->cantidadPlazas = $request->cantidadPlazas;
        $programa->docentes = $request->docentes;
        $programa->duracion = $request->duracion;
        $programa->horasAcademicas = $request->horasAcademicas;
        $programa->creditos = $request->creditos;
        $programa->horarios = $request->horarios;
        $programa->becas = $request->becas;
        $programa->facebook = $request->facebook;
        $programa->instagram = $request->instagram;
        $programa->twitter = $request->twitter;
        $programa->whatsapp = $request->whatsapp;
        $programa->consultorwhatsapp = $request->consultorwhatsapp;
        $programa->coordinador_id = $request->coordinadorProgramaPostgrado;
        $programa->coordinadorprograma = $request->coordinadorPrograma;
        $programa->organizacionCurso = $request->organizacionCurso;
        $programa->estadoPrograma = $request->estadoPrograma;
        $programa->costoProfesionales = $request->costoProfesionales;
        $programa->costoEstudiantes = $request->costoEstudiantes;
        $programa->primeraCuotaProfesionales = $request->primeraCuotaProfesionales;
        $programa->primeraCuotaEstudiantes = $request->primeraCuotaEstudiantes;
        $programa->pagosMensualesProfesionales = $request->pagosMensualesProfesionales;
        $programa->pagosMensualesEstudiantes = $request->pagosMensualesEstudiantes;
        $programa->modalidadDiplomado = $request->modalidadDiplomado;
        $programa->objetivos = $request->objetivos;
        $programa->perfilEstudiante = $request->perfilEstudiante;
        $programa->presentacion = $request->presentacion;
        $programa->perfilGraduado = $request->perfilGraduado;
        $programa->planEstudio = $request->planEstudio;
        $programa->cronograma = $request->cronograma;
        $programa->requisitos = $request->requisitos;
        $programa->mayoresInformes = $request->mayoresInformes;
        $programa->inversion = $request->inversion;
        if($request->hasFile('imagenPostgradoAfiche')){
            //eliminar imagen anterior
            $imagenAnterior = $programa->imagen;
            Storage::disk('public')->delete($imagenAnterior);
            //guardar nueva imagen
            $imagen = $request->file('imagenPostgradoAfiche');
            $nombreImagen = time().$imagen->getClientOriginalName();
            //guardar en eorage link
            //$imagen->move(public_path('storage/images'),$nombreImagen);
            $imagen->move(public_path('storage/images'),$nombreImagen);
            $path = "storage/images/".$nombreImagen;
            $programa->imagen = $path;
        }
        $programa->save();
        return redirect()->route('programas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        
    }
}
