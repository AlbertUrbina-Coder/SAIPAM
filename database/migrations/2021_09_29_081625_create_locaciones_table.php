<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locaciones', function (Blueprint $table) {
            $table->id('idLocacion');
            $table->string('tipoLocacion', 50);
            $table->string('nombreLocacion', 50);
            $table->unsignedBigInteger('idCiudad');
                $table->foreign('idCiudad')->references('id')->on('ciudades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('capacidad');
            $table->string('direccion', 100);
            $table->string('correoContacto', 50);
            $table->integer('valorAlquiler')->nullable();
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
        Schema::dropIfExists('locaciones');
    }
}
