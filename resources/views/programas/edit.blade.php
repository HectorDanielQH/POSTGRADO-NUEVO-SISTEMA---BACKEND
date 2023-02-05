@extends('adminlte::page')

@section('title', 'Dashboard')
@section('plugins.Summernote', true)
@section('content_header')
    {{--programas titulo y boton--}}
    <div class="container">
        <h1>Crear Programas</h1>
    </div>
@stop

@section('content')
    {{--heaader--}}
    @php
    $config = [
        "height" => "300",
        "toolbar" => [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ],
    ]
    @endphp
    <form action="{{route('programas.update',['programa'=>$programa])}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row my-2">
            <div class="col-4">
                <label for="tipoPrograma">TIPO DE PROGRAMA</label>
                <select name="tipoPrograma" id="tipoPrograma" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>
                    @foreach ($tipoprogramas as $tipoprograma)
                        {{--editar if--}}
                        <option 
                            value="{{$tipoprograma->id}}" 
                            {{$programa->tipoPrograma_id == $tipoprograma->id ? 'selected' : '' }}>
                            {{$tipoprograma->nombre}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="facultad">UNIDAD OFERTANTE</label>
                <select name="facultad" id="facultad" class="form-control"
                    @role('administrador')
                    @else
                        disabled
                    @endrole
                >
                    @foreach ($facultades as $facultad)
                        <option value="{{$facultad->id}}" 
                        {{$programa->facultad_id == $facultad->id ? 'selected' : '' }}>
                        {{$facultad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="carrera">CARRERA</label>
                <select name="carrera" id="carrera" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>
                    @foreach ($carreras as $carrera)
                        <option value="{{$carrera->id}}" 
                        {{$programa->carrera_id == $carrera->id ? 'selected' : '' }}>
                        {{$carrera->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-4">
                <label for="convenio">CONVENIO</label>
                <select name="convenio" id="convenio" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>
                    @foreach ($convenios as $convenio)
                        <option value="{{$convenio->id}}"
                        {{$programa->convenio_id == $convenio->id ? 'selected' : '' }}>
                            {{$convenio->nombre}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="nombrePrograma">NOMBRE DEL PROGRAMA</label>
                <input type="text" name="nombrePrograma" id="nombrePrograma" class="form-control" value="{{$programa->nombrePrograma}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('nombrePrograma')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="tituloOtorga">TÍTULO QUE OTORGA</label>
                <input type="text" name="tituloOtorga" id="tituloOtorga" class="form-control" value="{{$programa->tituloOtorga}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('tituloOtorga')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>



        <div class="row my-2">
            <div class="col-4">
                <label for="modalidad">MODALIDAD</label>
                <input type="text" name="modalidad" id="modalidad" class="form-control" value="{{$programa->modalidad}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('modalidad')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="cantidadPlazas">CANTIDAD DE PLAZAS</label>
                <input type="text" name="cantidadPlazas" id="cantidadPlazas" class="form-control" value="{{$programa->cantidadPlazas}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('cantidadPlazas')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="docentes">DOCENTES</label>
                <input type="text" name="docentes" id="docentes" class="form-control" value="{{$programa->docentes}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('docentes')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>


        <div class="row my-2">
            <div class="col-4">
                <label for="duracion">DURACIÓN</label>
                <input type="text" name="duracion" id="duracion" class="form-control" value="{{$programa->duracion}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('duracion')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="horasAcademicas">HORAS ACADÉMICAS</label>
                <input type="text" name="horasAcademicas" id="horasAcademicas" class="form-control" value="{{$programa->horasAcademicas}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('horasAcademicas')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="creditos">CRÉDITOS</label>
                <input type="text" name="creditos" id="creditos" class="form-control" value="{{$programa->creditos}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('creditos')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="row my-2">
            <div class="col-4">
                <label for="horarios">HORARIOS</label>
                <input type="text" name="horarios" id="horarios" class="form-control" value="{{$programa->horarios}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('horarios')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="becas">BECAS</label>
                <input type="text" name="becas" id="becas" class="form-control" value="{{$programa->becas}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('becas')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="facebook">LINK DEL PROGRAMA DE FACEBOOK</label>
                <input type="text" name="facebook" id="facebook" class="form-control" value="{{$programa->facebook}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('facebook')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>
        
        <div class="row my-2">
            <div class="col-4">
                <label for="instagram">LINK DEL PROGRAMA DE INSTAGRAM</label>
                <input type="text" name="instagram" id="instagram" class="form-control" value="{{$programa->instagram}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('instagram')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="twitter">LINK DEL PROGRAMA DE TWITTER</label>
                <input type="text" name="twitter" id="twitter" class="form-control" value="{{$programa->twitter}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('twitter')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="whatsapp">LINK DEL GRUPO DE WhatsApp "CONSULTORES" </label>
                <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{$programa->whatsapp}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('whatsapp')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>


        <div class="row my-2">
            <div class="col-4">
                <label for="consultorwhatsapp">NÚMERO DE WHATSAPP DEL CONSULTOR</label>
                <input type="text" name="consultorwhatsapp" id="consultorwhatsapp" class="form-control" value="{{$programa->consultorwhatsapp}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('consultorwhatsapp')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="coordinadorProgramaPostgrado">COORDINADOR DEL PROGRAMA DE POSTGRADO</label>
                {{--select--}}
                <select name="coordinadorProgramaPostgrado" id="coordinadorProgramaPostgrado" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>
                    @foreach($coordinadores as $coordinador)
                        <option value="{{$coordinador->id}}"
                        {{$coordinador->id == $programa->coordinador_id? 'selected' : ''}}>
                        {{$coordinador->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="coordinadorPrograma">COORDINADOR DEL PROGRAMA</label>
                <input type="text" name="coordinadorPrograma" id="coordinadorPrograma" class="form-control" value="{{$programa->coordinadorprograma}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('coordinadorPrograma')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>


        <div class="row my-2">
            <div class="col-4">
                <label for="organizacionCurso">ORGANIZACIÓN DEL CURSO</label>
                <input type="text" name="organizacionCurso" id="organizacionCurso" class="form-control" value="{{$programa->organizacionCurso}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                @error('organizacionCurso')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="estadoPrograma">ESTADO DEL PROGRAMA</label>
                {{--LSELECT--}}
                <select name="estadoPrograma" id="estadoPrograma" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>
                    <option value="Activo" {{$programa->estadoPrograma=='Activo'?'selected':''}}>ACTIVAR PROGRAMA</option>
                    <option value="Inactivo" {{$programa->estadoPrograma=='Inactivo'?'selected':''}}>DESACTIVAR PROGRAMA</option>
                </select>
            </div>
            <div class="col-4">
                <label for="costoProfesionales">COSTO PARA PROFESIONALES</label>
                <input type="text" name="costoProfesionales" id="costoProfesionales" class="form-control" value="{{$programa->costoProfesionales}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                <span class="help-block text-success">{{__('Ej.: 4.000 Bs.- (Cuatro mil 00/100 bolivianos)')}}</span>
                @error('costoProfesionales')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>


        <div class="row my-2">
            <div class="col-4">
                <label for="costoEstudiantes">COSTO PARA ESTUDIANTES</label>
                <input type="text" name="costoEstudiantes" id="costoEstudiantes" class="form-control" value="{{$programa->costoEstudiantes}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                <span class="help-block text-success">{{__('Ej.: 3.500 Bs.- (tres mil Quinientos 00/100 bolivianos)')}}</span>
                @error('costoEstudiantes')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="primeraCuotaProfesionales">PRIMERA CUOTA PARA PROFESIONALES</label>
                <input type="text" name="primeraCuotaProfesionales" id="primeraCuotaProfesionales" class="form-control" value="{{$programa->primeraCuotaProfesionales}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                <span class="help-block text-success">{{__('Ej.: 1.200 Bs.-')}}</span>
                @error('primeraCuotaProfesionales')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="primeraCuotaEstudiantes">PRIMERA CUOTA PARA ESTUDIANTES</label>
                <input type="text" name="primeraCuotaEstudiantes" id="primeraCuotaEstudiantes" class="form-control" value="{{$programa->primeraCuotaEstudiantes}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                <span class="help-block text-success">{{__('Ej.: 1.000 Bs.-')}}</span>
                @error('primeraCuotaEstudiantes')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="row my-2">
            
            <div class="col-4">
                <label for="pagosMensualesProfesionales">PAGOS MENSUALES PARA PROFESIONALES</label>
                <input type="text" name="pagosMensualesProfesionales" id="pagosMensualesProfesionales" class="form-control" value="{{$programa->pagosMensualesProfesionales}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                <span class="help-block text-success">{{__('Ej.: 3000 Bs.- en cuatro (4) cuotas mensuales de 700 Bs.-')}}</span>
                @error('pagosMensualesProfesionales')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="pagosMensualesEstudiantes">PAGOS MENSUALES PARA ESTUDIANTES</label>
                <input type="text" name="pagosMensualesEstudiantes" id="pagosMensualesEstudiantes" class="form-control" value="{{$programa->pagosMensualesEstudiantes}}" @role('administrador')
                    @else
                        disabled
                    @endrole>
                <span class="help-block text-success">{{__('Ej.: 2000 Bs.- en cuatro (4) cuotas mensuales de 500 Bs.-')}}</span>
                @error('pagosMensualesEstudiantes')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            <div class="col-4">
                <label for="modalidadDiplomado">¿MODALIDAD VIA DE DIPLOMADO?</label>
                {{--SELECT--}}
                <select name="modalidadDiplomado" id="modalidadDiplomado" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>
                    <option value="SI" {{ $programa->modalidadDiplomado=='SI'?'selected':'' }}>SI (SOLO ESTUDIANTES)</option>
                    <option value="NO" {{ $programa->modalidadDiplomado=='NO'?'selected':'' }}>NO (SOLO PROFESIONALES)</option>
                    <option value="AMBOS" {{$programa->modalidadDiplomado=='AMBOS'?'selected':''}}>AMBOS (ESTUDIANTES Y PROFESIONALES)</option>
                </select>
            </div>
        </div>

        {{------------------------------------------------------------------------------------}}
        <div class="row my-2">
            <div class="col-12">
                {{--MOSTRAR IMAGEN--}}
                <label for="" class="text-danger">Imagen existente--></label>
                <img src="{{asset('').'/'.$programa->imagen}}" alt="" width="200">
                <br>
                <label for="imagenPostgradoAfiche">INGRESA LA IMAGEN DEL AFICHE (TRATA DE QUE SEA EL MENOR TAMAÑO POSIBLE)</label>
                {{--INPUT--}}
                <input type="file" name="imagenPostgradoAfiche" id="imagenPostgradoAfiche" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>
            </div>
        </div>
        {{------------------------------------------------------------------------------------}}
        <div class="row my-2">
            
            <div class="col-4">
                <label for="objetivos">OBJETIVOS</label>
                {{--textarea--}}
                <textarea name="objetivos" id="objetivos" cols="30" rows="12" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>{{$programa->objetivos}}</textarea>
            </div>
            <div class="col-4">
                <label for="perfilEstudiante">PERFIL DEL ESTUDIANTE</label>
                {{--textarea--}}
                <textarea name="perfilEstudiante" id="perfilEstudiante" cols="30" rows="12" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>{{$programa->perfilEstudiante}}</textarea>
            </div>
            <div class="col-4">
                <label for="presentacion">PRESENTACIÓN</label>
                {{--textarea--}}
                <textarea name="presentacion" id="presentacion" cols="30" rows="12" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>{{$programa->presentacion}}</textarea>
            </div>
        </div>
        {{------------------------------------------------------------------------------------}}
        <div class="row">
            <div class="col-4">
                <label for="perfilGraduado">PERFIL DEL GRADUADO</label>
                {{--textarea--}}
                <textarea name="perfilGraduado" id="perfilGraduado" cols="30" rows="15" class="form-control" @role('administrador')
                    @else
                        disabled
                    @endrole>{{$programa->perfilGraduado}}</textarea>
            </div>
            {{--3 WYSIWYG editor--}}
            <div class="col-4">
                <div class="form-group">
                    <x-adminlte-text-editor name="planEstudio" label="PLAN DE ESTUDIO" label-class="text-dark"
                    igroup-size="sm" placeholder="Ingrese el plan de estudio..." :config="$config" >
                    {!! $programa->planEstudio !!}
                    </x-adminlte-text-editor>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <x-adminlte-text-editor name="cronograma" label="CRONOGRAMA" label-class="text-dark"
                    igroup-size="sm" placeholder="Ingrese el cronograma..." :config="$config">
                    {!! $programa->cronograma !!}
                    </x-adminlte-text-editor>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <x-adminlte-text-editor name="requisitos" label="REQUISITOS" label-class="text-dark"
                    igroup-size="sm" placeholder="Ingrese los requisitos..." :config="$config">
                    {!! $programa->requisitos !!}
                    </x-adminlte-text-editor>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <x-adminlte-text-editor name="mayoresInformes" label="MAYORES INFORMES" label-class="text-dark"
                    igroup-size="sm" placeholder="Ingrese los mayores informes..." :config="$config">
                    {!! $programa->mayoresInformes !!}
                    </x-adminlte-text-editor>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <x-adminlte-text-editor name="inversion" label="INVERSION" label-class="text-dark"
                    igroup-size="sm" placeholder="Ingrese la inversión" :config="$config">
                    {!! $programa->inversion !!}
                    </x-adminlte-text-editor>
                </div>
            </div>
        </div>
        @role('administrador')
            <button class="btn btn-success mb-4">GUARDAR PROGRAMA</button>
        @endrole
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop