<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de participantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{asset('images/uatfpostgrado.png')}}" type="image/x-icon">
    <style>
        body{
            background-attachment: fixed;
            background-image: url("https://elpotosi.net/img/contents/images_980/2019/06/03/nota76579_imagen68201.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .formulario{
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/uatfpostgrado.png')}}" alt="Logo" width="30" class="d-inline-block align-text-top">
                DIRECCIÓN DE POSTGRADO - INSCRIPCIONES
            </a>
        </div>
    </nav>

    <form 
        class="row g-3 needs-validation container mx-auto my-5 formulario"
        action="{{route('estudiantes.store')}}"
        method="POST"
    >
        @csrf
        <div class="col-md-12">
            <h1 class="text-center text-dark">FORMULARIO DE INSCRIPCIÓN PARA PROFESIONALES</h1>
        </div>
        <div class="col-12">
            <label for="nombreprograma" class="form-label">NOMBRE DEL PROGRAMA</label>
            <input type="text" class="form-control" id="nombreprograma" value="{{$programa->nombrePrograma}}" disabled>
        </div>
        <div class="col-md-12">
            <h3 class="text-center text-dark">DATOS PERSONALES</h3>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="carnetdeidentidad" class="form-label">Número de Carnet de Identidad</label>
                <input type="text" class="form-control" name="carnetdeidentidad" id="carnetdeidentidad" placeholder="Ingrerse su numero de C.I." required>
            </div>
            <div class="col-md-6">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" name="sexo" id="sexo" required>
                    <option selected disabled value="">Seleccione...</option>
                    <option value='1'>Masculino</option>
                    <option value='2'>Femenino</option>
                </select>
            </div>
        </div>
        <!--hidden-->
        <input type="hidden" name="programa_id" value="{{$programa->id}}">
        <input type="hidden" name="tipo_participante" value="1">
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="nombrecompleto" class="form-label">Nombre completo</label>
                <input type="text" name="nombrecompleto" class="form-control" id="nombrecompleto" placeholder="Ingrese su nombre completo" required>
            </div>
            <div class="col-md-6">
                <label for="domicilio" class="form-label">Domicilio</label>
                <input type="text" name="domicilio" class="form-control" id="domicilio" placeholder="Ingrese su domicilio" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ingrese su apellido" required>
            </div>
            <div class="col-md-6">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" name="nacionalidad" class="form-control" id="nacionalidad" placeholder="Ingrese su nacionalidad" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="fechadenacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" name="fechadenacimiento" class="form-control" id="fechadenacimiento" placeholder="Ingrese su fecha de nacimiento" required>
            </div>
            <div class="col-md-6">
                <label for="celular" class="form-label">Celular</label>
                <input type="number" name="celular" class="form-control" id="celular" placeholder="Ingrese su numero de celular" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="lugardenacimiento" class="form-label">Lugar de nacimiento</label>
                <input type="text" class="form-control" name="lugardenacimiento" id="lugardenacimiento" placeholder="Ingrese su lugar de nacimiento" required>
            </div>
            <div class="col-md-6">
                <label for="correoelectronico" class="form-label">Correo Electrónico</label>
                <input type="email" name="correoelectronico" class="form-control" id="correoelectronico" placeholder="Ingrese su correo electrónico" required>
            </div>
        </div>

        <!-------------------------------------------------------->
        <div class="col-md-12">
            <h3 class="text-center text-dark">DATOS ACADÉMICOS</h3>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="universidad" class="form-label">Universidad</label>
                <select name="universidad" id="universidad" class="form-select" required>
                    <option value="" disabled>Seleccione...</option>
                    @foreach ($universidades as $universidad)
                        <option value="{{$universidad->id}}" select>{{$universidad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="tituloprovision" class="form-label">Título en Provisión Nacional</label>
                <input type="text" class="form-control" id="tituloprovision" name="tituloprovision" placeholder="Ingrese su titulo en provisión nacional" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="facultad" class="form-label">Facultad</label>
                <select name="facultad" id="facultad" class="form-select" required>
                    <option value="" disabled>Seleccione...</option>
                    @foreach ($facultades as $facultad)
                        <option value="{{$facultad->id}}">{{$facultad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="fechaemisiontitulo" class="form-label">Fecha de emisión del título profesional</label>
                <input type="date" class="form-control" name="fechaemisiontitulo" id="fechaemisiontitulo" placeholder="Ingrese su fecha de emisión del título profesional" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="carrera" class="form-label">Carrera</label>
                <select name="carrera" id="carrera" class="form-select" required>
                    <option value="" disabled>Seleccione...</option>
                    @foreach ($carreras as $carrera)
                        <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="postgradosrealizados" class="form-label">Mensione los postgrados que realizó</label>
                <input type="text" class="form-control" name="postgradosrealizados" id="postgradosrealizados" placeholder="opcional" required>
                <span>
                    <p class="text-center text-danger">Si no realizó postgrados, por favor deje en blanco el campo, es opcional</p>
                </span>
            </div>
        </div>


        <!-------------------------------------------------------->
        <div class="col-md-12">
            <h3 class="text-center text-dark">DATOS PROFESIONALES</h3>
            <span>
                <p class="text-center text-danger">Si no trabaja en la actualidad, por favor deje en blanco los campos, es opcional</p>
            </span>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="institucion" class="form-label">Institución donde trabaja</label>
                <input type="text" class="form-control" name="institucion" id="institucion" placeholder="Ingrese su institución donde trabaja" required>
            </div>
            <div class="col-md-6">
                <label for="periododetrabajo" class="form-label">Periodo de trabajo</label>
                <input type="text" class="form-control" name="periododetrabajo" id="periododetrabajo" placeholder="Ingrese el periodo que está trabajando" required>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="departamentotrabaja" class="form-label">Departamento donde trabaja</label>
                <select name="departamentotrabaja" id="departamentotrabaja" class="form-select" required>
                    <option value="" disabled>Seleccione...</option>
                    <option value="POTOSÍ">POTOSÍ</option>
                    <option value="COCHABAMBA">COCHABAMBA</option>
                    <option value="LA PAZ">LA PAZ</option>
                    <option value="SANTA CRUZ">SANTA CRUZ</option>
                    <option value="ORURO">ORURO</option>
                    <option value="TARIJA">TARIJA</option>
                    <option value="BENI">BENI</option>
                    <option value="PANDO">PANDO</option>
                    <option value="CHUQUISACA">CHUQUISACA</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="cargoquedesempena" class="form-label">Mensione el cargo que desempeña</label>
                <input type="text" class="form-control" name="cargoquedesempena" id="cargoquedesempena" placeholder="Ingrese el cargo que desempeña" required>
            </div>
        </div>


        <!-----------------------------SUBMIT--------------------------->
        <div class="col-md-12 mt-3">
            <button class="btn btn-primary" type="submit">Enviar mis datos y registrarme</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>