<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productores', function (Blueprint $table) {
            $table->id('idProductor');
            $table->string('nombreProductor', 100);
            $table->string('tipoDocumento', 100);
            $table->string('numeroDocumento', 10);
                $table->unsignedBigInteger('idCiudad');
                $table->foreign('idCiudad')->references('id')->on('ciudades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('direccion', 150)->nullable();
            $table->string('correo', 50);
            $table->string('telefono', 15);
            $table->string('registroMinCultura', 10)->nullable();
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
        Schema::dropIfExists('productores');
    }
}
