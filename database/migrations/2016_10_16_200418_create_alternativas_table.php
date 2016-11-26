<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativas', function (Blueprint $table) {
            $table->increments('idAlternativas');
            $table->boolean('estado');
            $table->text('descripcion');
            $table->integer('idPreguntas')->unsigned();
            $table->foreign('idPreguntas')
                ->references('idPreguntas')
                ->on('preguntas')
                ->onDelete('cascade');
            $table->timestamps();
            $table->smallInteger('showInput')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternativas');
    }
}
