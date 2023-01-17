@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Summernote', true)
@section('content_header')
    {{--programas titulo y boton--}}
    <div class="container">
        <h1>
            LISTA DE PARTICIPANTES DE:
            <br>
            {{$programa->nombrePrograma}}
        </h1>
    </div>
@stop

@section('content')

    {{--tabla--}}
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($estudiantes as $participante)
                <tr>
                    <th scope="row">{{
                        $loop->iteration
                        }}</th>
                    <td>{{$participante->nombres}}</td>
                    <td>{{$participante->apellidos}}</td>
                    <td>{{$participante->ci}}</td>
                    <td>{{$participante->celular}}</td>
                    <td>{{$participante->email}}</td>
                    <td>
                        {{--colorear--}}
                        @if($participante->tipo_participante == 1)
                            <span class="badge badge-success">{{__('Profesional')}}</span>
                        @else
                            <span class="badge badge-danger">{{__('Estudiante')}}</span>
                        @endif
                    </td>
                    <td>
                        <form
                            action="{{route('estudiantes.destroy', $participante->id)}}"
                            method="POST"
                            style="display: inline"
                        >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('¿Estas seguro de eliminar este registro?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
                        <h3 class="text-center">No hay participantes registrados</h3>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop