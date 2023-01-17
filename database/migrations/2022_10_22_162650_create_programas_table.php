<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipoPrograma_id');
            $table->foreign('tipoPrograma_id')->references('id')->on('tipoprogramas');
            $table->unsignedBigInteger('facultad_id');
            $table->foreign('facultad_id')->references('id')->on('facultades');
            $table->unsignedBigInteger('carrera_id');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->unsignedBigInteger('convenio_id');
            $table->foreign('convenio_id')->references('id')->on('convenios');
            $table->text('nombrePrograma');
            $table->text('tituloOtorga');
            $table->text('modalidad');
            $table->text('cantidadPlazas');
            $table->text('docentes');
            $table->text('duracion');
            $table->text('horasAcademicas');
            $table->text('creditos');
            $table->text('horarios');
            $table->text('becas');
            $table->text('facebook');
            $table->text('instagram');
            $table->text('twitter');
            $table->text('whatsapp');
            $table->text('consultorwhatsapp');
            $table->unsignedBigInteger('coordinador_id');
            $table->foreign('coordinador_id')->references('id')->on('users');
            $table->text('coordinadorprograma');
            $table->text('organizacionCurso');
            $table->text('estadoPrograma');
            $table->text('costoProfesionales');
            $table->text('costoEstudiantes');
            $table->text('primeraCuotaProfesionales');
            $table->text('primeraCuotaEstudiantes');
            $table->text('pagosMensualesProfesionales');
            $table->text('pagosMensualesEstudiantes');
            $table->text('modalidadDiplomado');
            $table->text('imagen');
            $table->text('objetivos');
            $table->text('perfilEstudiante');
            $table->text('presentacion');
            $table->text('perfilGraduado');
            $table->text('planEstudio');
            $table->text('cronograma');
            $table->text('requisitos');
            $table->text('mayoresInformes');
            $table->text('inversion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas');
    }
};
