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
        Schema::create('pivote_tabla', function (Blueprint $table) {
            $table->unsignedBigInteger('materia_id');
            $table->unsignedBigInteger('estudiante_id');

            $table->foreign('materia_id')->references('id')->on('materias_tabla');
            $table->foreign('estudiante_id')->references('codigo')->on('estudiantes_tabla');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivote_tabla');
    }
};
