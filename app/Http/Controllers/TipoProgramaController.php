<?php

namespace App\Http\Controllers;

use App\Models\TipoPrograma;
use Illuminate\Http\Request;

class TipoProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoprogramas = TipoPrograma::all();
        return view('tipoprogramas.index', compact('tipoprogramas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoPrograma  $tipoPrograma
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPrograma $tipoPrograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoPrograma  $tipoPrograma
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPrograma $tipoPrograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoPrograma  $tipoPrograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPrograma $tipoPrograma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPrograma  $tipoPrograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPrograma $tipoPrograma)
    {
        //
    }
}
