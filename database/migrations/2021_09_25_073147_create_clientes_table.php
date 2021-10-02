<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('idCliente');
            $table->string('nombreCliente', 100);
                $table->unsignedBigInteger('ciudad_id');
                $table->foreign('ciudad_id')->references('id')->on('ciudades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('genero', 13);
            $table->date('fechaNacimiento')->nullable();
            $table->string('correo', 50);
            $table->string('telefono', 10)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
