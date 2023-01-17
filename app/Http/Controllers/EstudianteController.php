<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\Universidad;
use App\Models\Facultad;
use App\Models\Carrera;
use Barryvdh\DomPDF\Facade\Pdf;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProfesional($id)
    {
        $programa = Programa::find($id);
        $universidades= Universidad::all();
        $facultades= Facultad::where('nombre','!=','DIRECCION DE POSTGRADO')->get();
        $carreras= Carrera::all();
        return view('estudiante.create', compact('programa', 'universidades', 'facultades', 'carreras'));
    }

    public function createEstudiante($id)
    {
        $programa = Programa::find($id);
        $universidades= Universidad::where('nombre','UNIVERSIDAD AUTONOMA TOMAS FRIAS')->get();
        $facultades= Facultad::where('nombre','!=','DIRECCION DE POSTGRADO')->get();
        $carreras= Carrera::all();
        return view('estudiante.createuatf', compact('programa', 'universidades', 'facultades', 'carreras'));
    }
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        if($request->tipo_participante == 1){
            $estudiante->programa_id = $request->programa_id;
            $estudiante->tipo_participante = $request->tipo_participante;
            $estudiante->ci = $request->carnetdeidentidad;
            $estudiante->nombres = $request->nombrecompleto;
            $estudiante->apellidos = $request->apellidos;
            $estudiante->fechaNacimiento = $request->fechadenacimiento;
            $estudiante->lugarNacimiento = $request->lugardenacimiento;
            $estudiante->sexo = $request->sexo;
            $estudiante->estadoCivil = 'soltero';
            $estudiante->domicilio = $request->domicilio;
            $estudiante->nacionalidad = $request->nacionalidad;
            $estudiante->celular = $request->celular;
            $estudiante->email = $request->correoelectronico;
            $estudiante->universidad = $request->universidad;
            $estudiante->facultad = $request->facultad;
            $estudiante->carrera = $request->carrera;
            $estudiante->tituloProvicional = $request->tituloprovision;
            $estudiante->fechaTituloProvicional = $request->fechaemisiontitulo;
            $estudiante->Postgrados = $request->postgradosrealizados;
            $estudiante->institucionDondeTrabaja = $request->institucion;
            $estudiante->lugarDondeTrabaja = $request->departamentotrabaja;
            $estudiante->cargo = $request->cargoquedesempena;
            $estudiante->periodo = $request->periododetrabajo;
            $estudiante->save();
        }
        else{
            if($request->tipo_participante==2){
                $estudiante->programa_id = $request->programa_id;
                $estudiante->tipo_participante = $request->tipo_participante;
                $estudiante->ci = $request->carnetdeidentidad;
                $estudiante->nombres = $request->nombrecompleto;
                $estudiante->apellidos = $request->apellidos;
                $estudiante->fechaNacimiento = $request->fechadenacimiento;
                $estudiante->lugarNacimiento = $request->lugardenacimiento;
                $estudiante->sexo = $request->sexo;
                $estudiante->estadoCivil = 'soltero';
                $estudiante->domicilio = $request->domicilio;
                $estudiante->nacionalidad = $request->nacionalidad;
                $estudiante->celular = $request->celular;
                $estudiante->email = $request->correoelectronico;
                $estudiante->universidad = $request->universidad;
                $estudiante->facultad = $request->facultad;
                $estudiante->carrera = $request->carrera;
                $estudiante->tituloProvicional = null;
                $estudiante->fechaTituloProvicional = null;
                $estudiante->Postgrados = null;
                $estudiante->institucionDondeTrabaja = null;
                $estudiante->lugarDondeTrabaja = null;
                $estudiante->cargo = null;
                $estudiante->periodo = null;
                $estudiante->save();
            }
        }
        $programa = Programa::find($request->programa_id);
        $estudiante = Estudiante::where('ci', $request->carnetdeidentidad)->orderBy('created_at', 'desc')->first();
        return view('estudiante.registrofinal', compact('estudiante', 'programa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */

    public function pdfFormulario($id,$pid)
    {
        $estudiante = Estudiante::where('ci', $id)->orderBy('created_at', 'desc')->first();
        $programa = Programa::find($pid);
        $universidad=Universidad::find($estudiante->universidad);
        $carrera=Carrera::find($estudiante->carrera);
        $pdf = PDF::loadView('pdf.formulario', compact('estudiante', 'programa','universidad','carrera'))
                /*carta*/    
                ->setPaper('8.5x11', 'vertical');
        return $pdf->stream('pdf.formulario');
    }
    public function pdfCarta($id,$pid)
    {
        $estudiante = Estudiante::where('ci', $id)->orderBy('created_at', 'desc')->first();
        $programa = Programa::find($pid);
        $universidad=Universidad::find($estudiante->universidad);
        $carrera=Carrera::find($estudiante->carrera);
        $pdf = PDF::loadView('pdf.carta', compact('estudiante', 'programa','universidad','carrera'))
                ->setPaper('8.5x11', 'vertical');
        return $pdf->stream('pdf.carta');
    }


    public function verlista($id)
    {
        $programa = Programa::find($id);
        $estudiantes = Estudiante::where('programa_id', $id)->get();
        return view('participantes.verlista', compact('estudiantes', 'programa'));
    }
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($estudiante)
    {
        $estudiante = Estudiante::find($estudiante);
        $estudiante->delete();
        return redirect()->route('verlista', $estudiante);
    }
}
