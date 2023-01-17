<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CARTA</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .header{
            text-align: right;
            font-size: 12pt;
            font-family: 'Times New Roman', Times, serif;
            /*****letra inclinada */
            font-style: italic;
            float: right;
            margin-right: 50px;
        }
        .fecha{
            text-align: left;
            font-size: 10pt;
            font-family: 'Times New Roman', Times, serif;
            /*****letra inclinada */
            font-style: italic;
            font-weight: 100;
            float: left;
            margin-left: 50px;
            margin-top: 90px;
        }
    </style>
</head>
<body>
    <h2 class="header">
        CARTA DE POSTULACIÓN
        <br>
        DIRECCIÓN DE POSTGRADO - UATF
        <br>
        FORMATO DP - 01
    </h2>
    <h2 class="fecha">
        Potosí, {{now()->format('d')}} de 
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
        <br>
        <br>
        Señor:
        <br>
        M.Sc. Ing. Gonzalo Fernando Ramírez Cala
        <br>
        <span>
            <strong>
                DIRECTOR a.i. DE POSTGRADO U.A.T.F.
            </strong>
        </span>
        <br>
        Presente.-
        <br>
        <br>
        <span>
            <strong style="
                border-bottom: 1px solid black;
                font-size: 11pt;
            ">
                Ref.- Solicitud de Inscripción al Programa de Postgrado U.A.T.F.
            </strong>
        </span>
        <br>
        <span style="
            text-align: justify;
            font-family: 'Times New Roman', Times, serif;
            width: 92%;
            float: left;
        ">
            <br>
            De mi consideración:
            <br>
            <br>
            En atención a la oferta de programas de postgrado gestión {{
                now()->format('Y')
            }} de la Universidad Autónoma
            Tomás Frías, elevo a su consideración el expediente con toda la documentación pertinente,
            solicitándole considere mi postulación en el programa:
        </span>
        <br>
        <br>
        <span style="
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 11pt;
            font-weight: bold;
            width: 92%;
            float: left;
            margin-top: 100px;
        ">
            {{$programa->nombrePrograma}}
        </span>
        <br>
        <br>
        <span style="
            text-align: justify;
            font-family: 'Times New Roman', Times, serif;
            width: 92%;
            float: left;
            margin-top: 130px;
        ">
        Asimismo, declaro tener pleno conocimiento de la normativa universitaria vigente y el sistema de
        admisión para ser parte del programa de postgrado, comprometiéndome a cumplir con las
        actividades académicas planificadas de la DIRECCIÓN DE POSTGRADO, en procura de los
        objetivos institucionales trazados.
        </span>
        <br>
        <br>
        <span style="
            text-align: justify;
            font-family: 'Times New Roman', Times, serif;
            width: 92%;
            float: left;
            margin-top: 160px;
        ">
        Con este motivo, reitero mis consideraciones más atentas.
        </span>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <span>
            <span style="
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                width: 40%;
                float: left;
                margin-top: 150px;
                text-transform: uppercase;
                margin-left: 50px;
            ">
                {{$estudiante->nombres}} {{$estudiante->apellidos}}
                <br>
                Nombres y Apellidos
            </span>
            <span style="
                text-align: justify;
                font-family: 'Times New Roman', Times, serif;
                width: 40%;
                float: right;
                margin-top: 165px;
                margin-left: 450px;
                text-transform: uppercase;
            ">
                Firma
            </span>
        </span>
        <br>
        <br>
        <br>
        <span style="
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 11pt;
            font-weight: 100;
            width: 92%;
            float: left;
            margin-top: 250px;
        ">
            C.I.- {{$estudiante->ci}}
            <br>
            Celular: {{$estudiante->celular}}
            <br>
            Correo Electrónico: {{$estudiante->email}}
        </span>
        <br>
        <br>
        <br>
        <span style="
            text-align: justify;
            font-family: 'Times New Roman', Times, serif;
            width: 92%;
            float: left;
            margin-top: 330px;">
            c.c. Arch. <br>
            Adj. Requisitos de inscripción
        </span>
    </h2>
</body>
</html>