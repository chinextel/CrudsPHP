<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationAlumnoCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alumno_curso', function (Blueprint $table) {

            $table->integer('alumno_id')->unsigned();
            $table->integer('curso_id')->unsigned();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('curso_id')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alumno_curso', function (Blueprint $table) {

            $table->dropForeign('alumno_id');
            $table->dropForeign('curso_id');
        });
    }
}
