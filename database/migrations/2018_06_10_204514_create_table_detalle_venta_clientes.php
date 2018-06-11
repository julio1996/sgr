<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleVentaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta_clientes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('comida_id')->unsigned();
            $table->foreign('comida_id')->references('id')->on('comidas');

            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('bebidas');

            $table->integer('cab_VentaCliente_id')->unsigned();
            $table->foreign('cab_VentaCliente_id')->references('id')->on('cab_venta_clientes');

            $table->integer('det_pedidoCliente_id')->unsigned();
            $table->foreign('det_pedidoCliente_id')->references('id')->on('detalle_pedido_clientes');



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
        Schema::dropIfExists('detalle_venta_clientes');
    }
}
