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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programa_id');
            $table->foreign('programa_id')->references('id')->on('programas');
            $table->unsignedBigInteger('tipo_participante');
            $table->string('ci');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fechaNacimiento');
            $table->string('lugarNacimiento');
            $table->unsignedBigInteger('sexo');
            $table->string('estadoCivil');
            $table->string('domicilio');
            $table->string('nacionalidad');
            $table->string('celular');
            $table->string('email');
            /*-----------------------*/
            $table->unsignedBigInteger('universidad');
            $table->foreign('universidad')->references('id')->on('universidades');
            $table->unsignedBigInteger('facultad');
            $table->foreign('facultad')->references('id')->on('facultades');
            $table->unsignedBigInteger('carrera');
            $table->foreign('carrera')->references('id')->on('carreras');
            $table->string('tituloProvicional')->nullable();
            $table->date('fechaTituloProvicional')->nullable();
            $table->string('Postgrados')->nullable();
            /*----------------------------------- */
            $table->string('institucionDondeTrabaja')->nullable();
            $table->string('lugarDondeTrabaja')->nullable();
            $table->string('cargo')->nullable();
            $table->string('periodo')->nullable();

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
        Schema::dropIfExists('participantes');
    }
};
