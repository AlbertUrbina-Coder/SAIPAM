<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_tickets', function (Blueprint $table) {
            $table->id('idTipoTicket');
            $table->unsignedBigInteger('idEvento');
                    $table->foreign('idEvento')->references('idEvento')->on('eventos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('sector', 100);
            $table->string('descripcion', 150)->nullable();
            $table->decimal('subtotal', 8, 2);
            $table->decimal('iva')->nullable();
            $table->decimal('valorTotal');
            $table->integer('cantidadTotal');
            $table->integer('cantidadVendida')->nullable();
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
        Schema::dropIfExists('tipo_tickets');
    }
}
