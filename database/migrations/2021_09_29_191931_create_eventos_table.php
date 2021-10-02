<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id('idEvento');
            $table->string('titulo', 100);
            $table->string('descripcionEvento', 100);
            $table->string('tipo', 50);
            $table->string('categoria', 50);
            $table->unsignedBigInteger('idProductor');
                    $table->foreign('idProductor')->references('idProductor')->on('productores')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('idCiudad');
                    $table->foreign('idCiudad')->references('id')->on('ciudades')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('idLocacion');
                    $table->foreign('idLocacion')->references('idLocacion')->on('locaciones')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->timestamp('fecha_hora');
            $table->integer('costo')->nullable();
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
        Schema::dropIfExists('eventos');
    }
}
