@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Summernote', true)
@section('content_header')
    <h1>Bienvenido al panel de control de la Dirección de <span class="text-danger">Postgrado</span> <span class="text-primary">U.A.T.F.</span></h1>
@stop

@section('content')
    @role('administrador')
        <div class="row d-flex justify-content-center">
            {{-- Themes --}}
            <x-adminlte-small-box title="{{$administradores}}" text="Administradores" icon="fas fa-fw fa-user-shield"
                theme="primary" url="{{route('administradores.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$coordinadores}}" text="Coordinadores" icon="fas fa-fw fa-user-tie"
                theme="secondary" url="{{route('coordinadores.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$estudiantes}}" text="Estudiantes Registrados" icon="fas fa-user-plus"
                theme="warning" class="col-3 mx-1"/>
        </div>
        <div class="row d-flex justify-content-center">
            {{-- Themes --}}
            <x-adminlte-small-box title="{{$universidades}}" text="UNIVERSIDADES" icon="fas fa-fw fa-university"
                theme="dark" url="{{route('universidades.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$facultades}}" text="FACULTADES" icon="fas fa-fw fa-graduation-cap"
                theme="info" url="{{route('facultades.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>
                
            <x-adminlte-small-box title="{{$carreras}}" text="CARRERAS" icon="fas fa-fw fa-book"
                theme="purple" url="{{route('carreras.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>
        </div>

        <div class="row d-flex justify-content-center">
            {{-- Themes --}}
            <x-adminlte-small-box title="{{$tipoprogramas}}" text="TIPOS DE PROGRAMAS" icon="fas fa-fw fa-graduation-cap"
                theme="danger" url="{{route('tipoprogramas.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$convenios}}" text="CONVENIOS" icon="fas fa-fw fa-handshake"
                theme="light" url="{{route('convenios.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>
                
            <x-adminlte-small-box title="{{$programas}}" text="PROGRAMAS" icon="fas fa-fw fa-book"
                theme="teal" url="{{route('programas.index')}}" url-text="Ver mas..." class="col-3 mx-1"/>
        </div>
    @endrole
    @role('coordinador')
        <div class="row d-flex justify-content-center">
            {{-- Themes --}}
            <x-adminlte-small-box title="{{$administradores}}" text="Administradores" icon="fas fa-fw fa-user-shield"
                theme="primary" class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$coordinadores}}" text="Coordinadores" icon="fas fa-fw fa-user-tie"
                theme="secondary" class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$estudiantes}}" text="Estudiantes Registrados" icon="fas fa-user-plus"
                theme="warning" class="col-3 mx-1"/>
        </div>
        <div class="row d-flex justify-content-center">
            {{-- Themes --}}
            <x-adminlte-small-box title="{{$universidades}}" text="UNIVERSIDADES" icon="fas fa-fw fa-university"
                theme="dark" class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$facultades}}" text="FACULTADES" icon="fas fa-fw fa-graduation-cap"
                theme="info" class="col-3 mx-1"/>
                
            <x-adminlte-small-box title="{{$carreras}}" text="CARRERAS" icon="fas fa-fw fa-book"
                theme="purple" class="col-3 mx-1"/>
        </div>

        <div class="row d-flex justify-content-center">
            {{-- Themes --}}
            <x-adminlte-small-box title="{{$tipoprogramas}}" text="TIPOS DE PROGRAMAS" icon="fas fa-fw fa-graduation-cap"
                theme="danger" class="col-3 mx-1"/>

            <x-adminlte-small-box title="{{$convenios}}" text="CONVENIOS" icon="fas fa-fw fa-handshake"
                theme="light" class="col-3 mx-1"/>
                
            <x-adminlte-small-box title="{{$programas}}" text="PROGRAMAS" icon="fas fa-fw fa-book"
                theme="teal" class="col-3 mx-1"/>
        </div>
    @endrole
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop