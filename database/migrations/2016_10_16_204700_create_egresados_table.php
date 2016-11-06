<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->increments('idEgresados');
            $table->string('dni', 10);
            $table->string('sexo', 15);
            $table->string('telefono' ,10);
            $table->text('direccion');
            $table->string('codigo', 12);
            $table->text('facultad');
            $table->text('eap');
            $table->date('fechaIngreso');
            $table->date('fechaEgreso');
            $table->date('fechaGrado');
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
        Schema::dropIfExists('egresados');
    }
}
