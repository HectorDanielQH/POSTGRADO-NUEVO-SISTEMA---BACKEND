<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENERADOR FINAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{asset('images/uatfpostgrado.png')}}" type="image/x-icon">
    <style>
        body{
            background-attachment: fixed;
            background-image: url("https://elpotosi.net/img/contents/images_980/2019/06/03/nota76579_imagen68201.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .formulario{
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="formulario m-5 text-center">
            <h3 class="m-md-5">
                IMPRIME ESTOS DOCUMENTOS Y LLEVALO A LA OFICINA DE POSTGRADO DE LA U.A.T.F.
            </h3>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center p-2">
                    <h2 class="col-12 d-flex justify-content-center align-items-center">
                        <!--ion-icon name="document-text-outline"></ion-icon-->
                        <a href="{{route('pdf', ['id'=>$estudiante->ci,'pid'=>$programa->id])}}" target="_blank" class="btn btn-warning d-flex justify-content-center align-items-center">
                        <ion-icon name="document-text-outline" class="display-5 m-3"></ion-icon>DESCARGAR FORMULARIO DE POSTGRADO</a>
                    </h2>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center p-2">
                    <h2 class="col-12 d-flex justify-content-center align-items-center">
                        <a href="{{route('pdfcarta', ['id'=>$estudiante->ci,'pid'=>$programa->id])}}" target="_blank" class="btn btn-primary d-flex justify-content-center align-items-center">
                        <ion-icon name="document-text-outline" class="display-5 m-3"></ion-icon>DESCARGAR CARTA DIRIGIDA AL DIRECTOR</a>
                    </h2>
                </div>
                @if($estudiante->tipo_participante == 1)
                    <div class="col-12 justify-content-center align-items-center- d-flex p-2">
                        <h2 class="col-md-6 d-flex justify-content-center align-items-center">
                            <a href="
                            {{
                                asset('docs/curriculum.docx')
                            }}
                            " target="_blank" class="btn btn-success d-flex justify-content-center align-items-center">
                            <ion-icon name="document-text-outline" class="display-5 m-3"></ion-icon>DESCARGAR FORMATO DE CUURRICULUM VITAE</a>
                        </h2>
                    </div>
                @endif
            </div>
            <h3 class="m-md-5 text-center">
                UNETE A NUESTRO GRUPO DE WHATSAPP DEL PROGRAMA {{$programa->nombrePrograma}}
            </h3>
            <div class="row">
                <div class="col-12 justify-content-center align-items-center- d-flex p-2">
                    <h2 class="col-md-6 d-flex justify-content-center align-items-center">
                        <a href="{{$programa->whatsapp}}" target="_blank" class="btn btn-success d-flex justify-content-center align-items-center">
                        <ion-icon name="logo-whatsapp" class="display-5 m-3"></ion-icon>   
                        GRUPO DE WHATSAPP</a>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>