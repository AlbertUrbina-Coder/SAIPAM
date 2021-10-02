<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('idTicket');
            $table->unsignedBigInteger('idEvento');
                    $table->foreign('idEvento')->references('idEvento')->on('eventos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('idTipoTicket')->nullable();
                    $table->foreign('idTipoTicket')->references('idTipoTicket')->on('tipo_tickets')
                    ->onDelete('set null')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('idCliente');
                    $table->foreign('idCliente')->references('idCliente')->on('clientes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('fila', 4)->nullable();
            $table->integer('silla')->nullable();
            $table->string('palco')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
