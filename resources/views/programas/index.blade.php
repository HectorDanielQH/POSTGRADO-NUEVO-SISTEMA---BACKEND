@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Summernote', true)
@section('content_header')
    {{--programas titulo y boton--}}
    <div class="container">
        <h1>Programas</h1>
        <!--MODIFICADO 30-01-2023-->
        @role('administrador')
            <a href="{{route('programas.create')}}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>
                Crear Programa
            </a>
        @endrole
        <!--FIN MODIFICACION-->
    </div>
@stop

@section('content')
    <livewire:programas-live/>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop