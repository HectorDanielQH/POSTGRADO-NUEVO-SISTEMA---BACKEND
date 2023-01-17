<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Programa extends Model
{
    use HasFactory;
    protected $table='programas';
    protected $fillable = [
        'tipoPrograma_id',
        'facultad_id',
        'carrera_id',
        'convenio_id',
        'nombrePrograma',
        'tituloOtorga',
        'modalidad',
        'cantidadPlazas',
        'docentes',
        'duracion',
        'horasAcademicas',
        'creditos',
        'horarios',
        'becas',
        'facebook',
        'instagram',
        'twitter',
        'whatsapp',
        'consultorwhatsapp',
        'coordinador_id',
        'coordinadorprograma',
        'organizacionCurso',
        'estadoPrograma',
        'costoProfesionales',
        'costoEstudiantes',
        'primeraCuotaProfesionales',
        'primeraCuotaEstudiantes',
        'pagosMensualesProfesionales',
        'pagosMensualesEstudiantes',
        'modalidadDiplomado',
        'imagen',
        'objetivos',
        'perfilEstudiante',
        'presentacion',
        'perfilGraduado',
        'planEstudio',
        'cronograma',
        'requisitos',
        'mayoresInformes',
        'inversion',
    ];
}
