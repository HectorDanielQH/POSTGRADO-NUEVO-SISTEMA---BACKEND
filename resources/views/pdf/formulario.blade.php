<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>FORMULARIO DE INSCRIPCION</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            background-image: url("{{ asset('images/fondo.jpg') }}");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;
            background-attachment: fixed;

        }
        .primercontenedor{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin: 0px;
            padding: 0px;
        }
        .logo1{
            margin: 0px;
            padding: 0px;
            float: left;
        }
        .logo2{
            margin: 0px;
            padding: 0px;
            float: right;
        }
        .titulo{
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }
        .segundocontenedor{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            background-color: #e5fff1;
            /*borde doble linea*/
            border: 3px double #000;
            padding: 0px;
            margin-top: 20px;
        }
        .segundocontenedor h3{
            margin: 0px;
            padding: 0px;
        }
        .tercercontenedor{
            margin-top: 10px;
        }
        .tercercontenedor h3{
            margin: 0px;
            padding: 0px;
        }
        .tercercontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: 20px;
            width: 20%;
            float: left;
        }

        .tercercontenedordos{
            text-align: center;
            font-size: 10px;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: 20px;
            width: 78%;
            float: right;
        }
        .cuartocontenedor{
            margin-top: 20px;
        }
        .cuartocontenedor h3{
            margin: 0px;
            padding: 0px;
        }
        .cuartocontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: 20px;
            width: 10%;
            float: left;
        }
        .cuartocontenedordos{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: 20px;
            width: 20%;
            float: left;
        }
        .cuartocontenedortres{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: 20px;
            width: 33%;
            float: left;
        }
        .cuartocontenedorcuatro{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: 20px;
            width: 15%;
            float: left;
        }
        .cuartocontenedorcinco{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: 20px;
            width: 20%;
            float: left;
        }
        .quintocontenedor{
            margin-top: 20px;
        }
        .quintocontenedor h3{
            margin: 0px;
            padding: 0px;
            padding-left: 20px;
        }
        .quintocontenedoruno{
            text-align: left;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px 0px;
            margin-top: 20px;
            width: 97%;
            float: left;
        }
        .sextocontenedor{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            background-color: #e5fff1;
            /*borde doble linea*/
            border: 3px double #000;
            padding: 0px;
            margin: 30px 0px;
        }
        .sextocontenedor h3{
            margin: 0px;
            padding: 0px;
        }

        /****************************************/

        .septimocontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: -15px;
            width: 20%;
            float: left;
        }
        .septimocontenedordos{
            text-align: left;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px;
            margin-top: -15px;
            width: 77%;
            float: right;
            /* uppercase */
            text-transform: uppercase;
            padding-left: 10px;
        }
        .contenedorsiete{
            margin-top: -4px;
            width: 100%;
            height: 25px;
            padding: 0px;
            justify-content: center;
            align-items: center;
        }
        .septimocontenedortres{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 15%;
            float: left;
            margin-left: -148px;
        }
        .septimocontenedorcuatro{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 20%;
            float: left;
            margin-left: 2px;
        }
        .septimocontenedorcinco{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 20%;
            float: left;
            margin-left: 153px;
        }
        .septimocontenedorseis{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 15%;
            float: left;
            margin-left: 153px;
        }
        .septimocontenedorsiete{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 10%;
            float: left;
            margin-left: -300px;
        }
        .septimocontenedorocho{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 16%;
            float: left;
            margin-left: 2px;
        }
        /*************************************** */
        .contenedorocho{
            margin-top: -4px;
            width: 100%;
            height: 25px;
            padding: 0px;
            justify-content: center;
            align-items: center;
        }
        .octavocontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 10%;
            float: left;
            margin-left: -800px;
        }
        .octavocontenedordos{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 44.2%;
            float: left;
            margin-left: 2px;
        }
        .octavocontenedortres{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 10%;
            float: left;
            margin-left: 2px;
        }
        .octavocontenedorcuatro{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 33.2%;
            float: left;
            margin-left: 2px;
        }
        /************************************ */

        .contenedornueve{
            margin-top: -4px;
            width: 100%;
            height: 25px;
            padding: 0px;
            justify-content: center;
            align-items: center;
        }
        .novenocontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 12.5%;
            float: left;
            margin-left: -648px;
        }
        .novenocontenedordos{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 25%;
            float: left;
            margin-left: 2px;
        }
        .novenocontenedortres{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 20%;
            float: left;
            margin-left: 2px;
        }
        .novenocontenedorcuatro{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 40%;
            float: left;
            margin-left: 2px;
        }
        /****************************************/
        .decimocontenedor{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            background-color: #e5fff1;
            /*borde doble linea*/
            border: 3px double #000;
            padding: 0px;
            margin: 15px 0px;
            width: 99%;
        }
        .decimocontenedor h3{
            margin: 0px;
            padding: 0px;
        }

        .contenedordiez{
            margin-top: -10px;
            width: 100%;
            height: 25px;
            padding: 0px;
            justify-content: center;
            align-items: center;
        }
        .decimocontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 33%;
            float: left;
            margin-left: 0px;
        }
        .decimocontenedordos{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 33.5%;
            float: left;
            margin-left: 2px;
        }
        .decimocontenedortres{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 31.5%;
            float: right;
            margin-left: 2px;
        }
        /****************************************/

        .contenedoronce{
            margin-top: -5px;
            width: 100%;
            height: 25px;
            padding: 0px;
            justify-content: center;
            align-items: center;
        }
        .oncecontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 33%;
            float: left;
            margin-left: -490px;
        }
        .oncecontenedordos{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 33.5%;
            float: left;
            margin-left: 2px;
        }
        .oncecontenedortres{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 31.5%;
            float: left;
            margin-left: 2px;
        }

        /*******************************************/
        .contenedordoce{
            margin-top: -10px;
            width: 100%;
            height: 25px;
            padding: 0px;
            justify-content: center;
            align-items: center;
        }
        .docecontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 49.5%;
            float: left;
            margin-left: 0px;
        }
        .docecontenedordos{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 49.2%;
            float: right;
        }
        /*********************************** */
        .contenedortrece{
            margin-top: -5px;
            width: 100%;
            height: 25px;
            padding: 0px;
            justify-content: center;
            align-items: center;
        }
        .trececontenedoruno{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 49.5%;
            float: left;
            margin-left: -362px;
        }
        .trececontenedordos{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            width: 49.2%;
            float: left;
            margin-left: 3px;
        }
        /***************************************/
        .catorcecontenedor{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            background-color: #e5fff1;
            /*borde doble linea*/
            border: 3px double #000;
            padding: 0px;
            margin: 15px 0px;
            width: 99%;
        }
        .catorcecontenedor h3{
            margin: 0px;
            padding: 0px;
        }
        /*************************** */
        .quincecontenedor{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            background-color: #e5fff1;
            /*borde doble linea*/
            border: 3px double #000;
            padding: 0px;
            margin-top: 0px;
        }
        .quincecontenedor h3{
            margin: 0px;
            padding: 0px;
        }
        /************************** */
        .contenedordieciseis{
            text-align: justify;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px 15px;
            margin-top: 10px;
        }
        .contenedordieciseis h3{
            margin: 0px 0px;
            padding: 0px;
        }
        /******************************/
        .contenedordiecisiete{
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            /*borde doble linea*/
            border: 1.5px solid #000;
            padding: 0px 15px;
            margin-top: 10px;
        }
        .contenedordiecisiete h3{
            margin: 0px 0px;
            padding: 0px;
        }
        /******************************/
        footer{
            position: fixed;
            width: 2.5cm;
            height:2.5cm; 
            float: right;
            border: 1px solid #000;
            text-align: center;
            text-transform: uppercase;
            text-justify: center;
            font-size: 10px;
        }
    </style>
</head>
<body>
    <!--imagen-->
    <div class="primercontenedor">        
        <img class="col-3" src="{{asset('images/uatf.png')}}" class="logo1" alt="UATF" width="80px"/>
        <img class="col-3" src="{{asset('images/uatfpostgrado.png')}}" class="logo2" alt="UATF" width="100px"/>
        <h3 class='titulo'>
            FORMULARIO DE ADMISIÓN - POSTGRADO {{date('Y')}}
            <br>
            UNIVERSIDAD AUTÓNOMA "TOMÁS FRÍAS"
            <br>
            VICERRECTORADO
            <br>
            DIRECCIÓN DE POSTGRADO
        </h3>
    </div>
    <div class="segundocontenedor">
        <h3>
            FORMULARIO DE INSCRIPCIÓN
            <br>
            DECLARACIÓN JURADA
        </h3>
    </div>
    <div class="tercercontenedor">
        <h3 class="tercercontenedoruno">
            PROGRAMA
        </h3>
        <h3 class="tercercontenedordos">
            {{$programa->nombrePrograma}}
        </h3>
    </div>
    <div class="cuartocontenedor">
        <h3 class="cuartocontenedoruno">
            Costo:
        </h3>
        <h3 class="cuartocontenedordos">
            @if($estudiante->tipo_participante == 1)
                @php
                    $costo = '';
                    for($i=0; $i < strlen($programa->costoProfesionales); $i++){
                        if($programa->costoProfesionales[$i] != ' '){
                            $costo .= $programa->costoProfesionales[$i];
                        }
                        else{
                            break;
                        }
                    }
                @endphp
                Bs. {{$costo}}
            @else
                @php
                    $costo = '';
                    for($i=0; $i < strlen($programa->costoEstudiantes); $i++){
                        if($programa->costoEstudiantes[$i] != ' '){
                            $costo .= $programa->costoEstudiantes[$i];
                        }
                        else{
                            break;
                        }
                    }
                @endphp
                Bs. {{$costo}}
            @endif
        </h3>
        <h3 class="cuartocontenedortres">
            <br>
        </h3>
        <h3 class="cuartocontenedorcuatro">
            Cuota Inicial:
        </h3>
        <h3 class="cuartocontenedorcinco">
            @if($estudiante->tipo_participante == 1)
                @php
                    $costo = '';
                    for($i=0; $i < strlen($programa->primeraCuotaProfesionales); $i++){
                        if($programa->primeraCuotaProfesionales[$i] != ' '){
                            $costo .= $programa->primeraCuotaProfesionaless[$i];
                        }
                        else{
                            break;
                        }
                    }
                @endphp
                Bs. {{$costo}}
            @else
                @php
                    $costo = '';
                    for($i=0; $i < strlen($programa->primeraCuotaEstudiantes); $i++){
                        if($programa->primeraCuotaEstudiantes[$i] != ' '){
                            $costo .= $programa->primeraCuotaEstudiantes[$i];
                        }
                        else{
                            break;
                        }
                    }
                @endphp
                Bs. {{$costo}}
            @endif
        </h3>
    </div>
    <div class="quintocontenedor">
        <h3 class="quintocontenedoruno">
            {{__('Plazo de pago saldo ')}}
            @if($estudiante->tipo_participante == 1)
                {{$programa->pagosMensualesProfesionales}}
            @else
                {{$programa->pagosMensualesEstudiantes}}
            @endif
        </h3>
    </div>
    <div class="sextocontenedor">
        <h3>
            DATOS GENERALES DEL SOLICITANTE
        </h3>
    </div>
    <h3 class="septimocontenedoruno">
        Nombres y Apellidos:
    </h3>
    <h3 class="septimocontenedordos">
        {{$estudiante->nombres}} {{$estudiante->apellidos}}
    </h3>
    <div class="contenedorsiete">
        <h3 class="septimocontenedortres">
            N° C.I.:
        </h3>
        <h3 class="septimocontenedorcuatro">
            {{$estudiante->ci}}
        </h3>
        <h3 class="septimocontenedorcinco">
            Fecha de Nacimiento:
        </h3>
        <h3 class="septimocontenedorseis">
            {{$estudiante->fechaNacimiento}}
        </h3>
        <h3 class="septimocontenedorsiete">
            Sexo:
        </h3>
        <h3 class="septimocontenedorocho">
            @if($estudiante->sexo == 1)
                Masculino
            @else
                Femenino
            @endif
        </h3>
    </div>
    <div class="contenedorocho">
        <h3 class="octavocontenedoruno">
            Domicilio:
        </h3>
        <h3 class="octavocontenedordos">
            {{$estudiante->domicilio}}
        </h3>
        <h3 class="octavocontenedortres">
            Ciudad:
        </h3>
        <h3 class="octavocontenedorcuatro">
            {{$estudiante->lugarNacimiento}}
        </h3>
    </div>
    <div class="contenedornueve">
        <h3 class="novenocontenedoruno">
            Celular:
        </h3>
        <h3 class="novenocontenedordos"> 
            {{$estudiante->celular}}
        </h3>
        <h3 class="novenocontenedortres">
            Correo Electrónico:
        </h3>
        <h3 class="novenocontenedorcuatro">
            {{$estudiante->email}}
        </h3>
    </div>

    <div class="decimocontenedor">
        <h3>
            HISTORIAL ACADÉMICO
        </h3>
    </div>
    @if($estudiante->tipo_participante == 1)
        <div class="contenedordiez">
            <h3 class="decimocontenedoruno">
                TÍTULO EN
            </h3>
            <h3 class="decimocontenedordos">
                UNIVERSIDAD
            </h3>
            <h3 class="decimocontenedortres">
                FECHA TÍTULO
            </h3>
        </div>

        <div class="contenedoronce">
            <h3 class="oncecontenedoruno">
                {{$estudiante->tituloProvicional}}
            </h3>
            <h3 class="oncecontenedordos">
                {{$universidad->nombre}}
            </h3>
            <h3 class="oncecontenedortres">
                {{$estudiante->fechaTituloProvicional}}
            </h3>
        </div>
    @else 
        <div class="contenedordoce">
            <h3 class="docecontenedoruno">
                CARRERA
            </h3>
            <h3 class="docecontenedordos">
                UNIVERSIDAD
            </h3>
        </div>

        <div class="contenedortrece">
            <h3 class="trececontenedoruno">
                {{$carrera->nombre}}
            </h3>
            <h3 class="trececontenedordos">
                {{$universidad->nombre}}
            </h3>
        </div>
    @endif
    
    <div class="catorcecontenedor">
        <h3>
            HISTORIAL LABORAL
        </h3>
    </div>
    <div class="contenedordiez">
        <h3 class="decimocontenedoruno">
            PERIODO
        </h3>
        <h3 class="decimocontenedordos">
            INSTITUCIÓN
        </h3>
        <h3 class="decimocontenedortres">
            CARGO
        </h3>
    </div>
    <div class="contenedoronce">
        <h3 class="oncecontenedoruno">
            {{$estudiante->periodo}}
        </h3>
        <h3 class="oncecontenedordos">
            {{$universidad->institucionDondeTrabaja}}
        </h3>
        <h3 class="oncecontenedortres">
            {{$estudiante->cargo}}
        </h3>
    </div>

    <div class="quincecontenedor">
        <h3>
            RECONOCIMIENTO DE DEUDA Y CUMPLIMIENTO DE OBLIGACIÓN
        </h3>
    </div>

    <div class="contenedordieciseis">
        <h5 class="dieciseiscontenedoruno">
            En mi condición de titular de los datos personales contenidos en
            la presente declaración jurada, con capacidad jurídica plena y de
            voluntad propia, registro mi inscripción en el programa de postgrado:
            {{$programa->nombrePrograma}}, que tiene el costo de
            @if($estudiante->tipo_participante == 1)
                {{$programa->costoProfesionales}}
            @else
                {{$programa->costoEstudiantes}}
            @endif
            , monto que asumo como deuda personal con la Universidad Autónoma Tomás
            Frías, comprometiéndome a su pago total en el plazo estipulado en el
            presente documento, computable a partir de la fecha, caso contrario me
            declaro deudor de plazo vencido, constituyéndose  el  saldo  adeudado  en 
            deuda  líquida  y  exigible  por  la  vía  judicial  como  deudor  en 
            mora,  sin  necesidad  de  requerimiento  judicial  o extrajudicial alguno.
            Para efectos de dicho cumplimiento de pago garantizo el cumplimiento de
            la presente obligación con todos mis bienes habidos y por haber, firmando
            al pie en señal de aceptación. Potosí, {{now()->format('d')}} de 
            @if(now()->format('m') == 1)
                Enero
            @elseif(now()->format('m') == 2)
                Febrero
            @elseif(now()->format('m') == 3)
                Marzo
            @elseif(now()->format('m') == 4)
                Abril
            @elseif(now()->format('m') == 5)
                Mayo
            @elseif(now()->format('m') == 6)
                Junio
            @elseif(now()->format('m') == 7)
                Julio
            @elseif(now()->format('m') == 8)
                Agosto
            @elseif(now()->format('m') == 9)
                Septiembre
            @elseif(now()->format('m') == 10)
                Octubre
            @elseif(now()->format('m') == 11)
                Noviembre
            @elseif(now()->format('m') == 12)
                Diciembre
            @endif
            de {{now()->format('Y')}}
        </h5>
    </div>


    <div class="contenedordiecisiete">
        <h5 class="diecisietecontenedoruno">
            <br>
            <br>
            <br>
            ------------------------------------------------------------
            <br>
            Firma
        </h5>
    </div>
    @if($estudiante->tipo_participante == 1)
        <div class="contenedordiecinueve" style="
        margin-top: -10px;
        ">
            <h6>
                Apreciado postulante, para confirmar su INSCRIPCIÓN favor adjuntar a este formulario los siguientes documentos:
                <br/>
                UNA COPIA, CARTA DE SOLICITUD DE INSCRIPCIÓN AL PROGRAMA DE POSTGRADO (Dirigida al director de postgrado: M. Sc. Ing. Gonzalo Ramírez Cala).
                <br/>
                UNA COPIA, HOJA DE VIDA RESUMIDA SEGÚN FORMATO DE POSTGRADO.DOS COPIAS, FORMULARIO DE INSCRIPCIÓN DEBIDAMENTE LLENADO Y FIRMADO (Registro en línea desde el sitio web: https://www.uatfpostgrado.edu.bo).
                <br/>
                UNA FOTOCOPIA SIMPLE DEL TÍTULO NACIONAL.
                <br/>
                UNA FOTOCOPIA SIMPLE DEL DIPLOMA ACADÉMICO.
                <br/>
                DOS FOTOCOPIAS SIMPLES DE LA CEDULA DE IDENTIDAD
                <br/>
                DOS FOTOGRAFÍAS 3X3 CM FONDO ROJO.
                <br/>
                COMPROBANTE DE PAGO INICIAL(Original).
                <br/>
                FORMULARIO DE REGISTRO DE BENEFICIARIO EN SIGEP - ESTADO ACTIVO.
                <br/>
                NOTA: - Para confirmar su INSCRIPCIÓN la dirección de postgrado se comunicará con usted, una vez se complete el cupo mínimo de participantes al programa.
                <br>
                Para confirmar su inscripción solo deberá presentar su comprobante original del primer pago y sus fotografias 3X3 cm fondo rojo.
                <br>
                - NO es necesario incluir la cuenta bancaria al momento de registro en SIGEP.
            </h6>
        </div>
    @else
        <div class="contenedordiecinueve" style="
        margin-top: -10px;
        ">
            <h6>
            Apreciado postulante, para confirmar su INSCRIPCIÓN favor adjuntar a este formulario los siguientes documentos:
            <br/>
            UNA COPIA, CARTA DE SOLICITUD DE INSCRIPCIÓN AL PROGRAMA DE POSTGRADO (Dirigida al director de postgrado: M. Sc. Ing. Gonzalo Ramírez Cala).
            <br/>
            Certificado de calificaciones de las asignaturas que forman parte del plan de estudios de la Carrera (pensum).
            <br/>
            Certificado emitido por el Director de Carrera en el cual conste la conclusión del plan de estudios por parte del solicitante (Acreditando estar el estudiante en la fase de
            graduación)
            <br/>
            Dos fotocopia de su cédula de identidad.
            <br/>
            Una fotografía a color con fondo celeste 3x3 cm.
            <br/>
            Comprobante de Pago Inicial(Original)
            <br/>
            Formulario de Registro de Beneficiario en SIGEP - Estado Activo.
            <br/>
            NOTA: - Todos los Requisitos debe hacer llegar a la Brevedad posible, en caso de regularizar máximo tiene hasta antes del segundo módulo.
            <br/>
            - NO es necesario incluir la cuenta bancaria al momento de registro en SIGEP.

            </h6>
        </div>
    @endif

    <footer class="foto">
        <br>
        <br>
            Aquí Foto 3x3
    </footer>
</body>
</html>