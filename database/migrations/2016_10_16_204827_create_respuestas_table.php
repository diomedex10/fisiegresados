<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('idRespuestas');
            $table->text('descripcion');
            $table->integer('idAlternativas')->unsigned();
            $table->foreign('idAlternativas')->references('idAlternativas')->on('alternativas');
            $table->integer('idEgresados')->unsigned();
            $table->foreign('idEgresados')->references('idEgresados')->on('egresados');
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
        Schema::dropIfExists('respuestas');
    }
}
