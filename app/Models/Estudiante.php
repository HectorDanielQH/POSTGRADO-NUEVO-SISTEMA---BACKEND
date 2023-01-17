<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'participantes';
    protected $fillable = [
        'programa_id',
        'tipo_participante',
        'ci',
        'nombres',
        'apellidos',
        'fechaNacimiento',
        'lugarNacimiento',
        'sexo',
        'estadoCivil',
        'domicilio',
        'nacionalidad',
        'celular',
        'email',
        'universidad',
        'facultad',
        'carrera',
        'tituloProvicional',
        'fechaTituloProvicional',
        'Postgrados',
        'institucionDondeTrabaja',
        'lugarDondeTrabaja',
        'cargo',
        'periodo'
    ];
}
