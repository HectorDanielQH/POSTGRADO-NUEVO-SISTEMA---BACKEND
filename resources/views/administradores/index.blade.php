@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Summernote', true)
@section('content_header')

@stop

@section('content')
    <livewire:administradores-live/>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop