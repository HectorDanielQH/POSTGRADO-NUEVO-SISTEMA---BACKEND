@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Summernote', true)
@section('content_header')
    {{--programas titulo y boton--}}
    <div class="container">
        <h1>Programas</h1>
        <a href="{{route('programas.create')}}" class="btn btn-primary float-right">
            <i class="fas fa-plus"></i>
            Crear Programa</a>
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