<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetallePedidoClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedido_clientes', function (Blueprint $table) {
            $table->increments('id');

            $table->float('precio_unitario', 6,2);
            $table->integer('cantidad');
            $table->float('sub_total', 6,2);

            $table->integer('comida_id')->unsigned();
            $table->foreign('comida_id')->references('id')->on('comidas');

            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('bebidas');

            $table->integer('cabPedido_cliente_id')->unsigned();
            $table->foreign('cabPedido_cliente_id')->references('id')->on('cab_pedido_clientes');

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
        Schema::dropIfExists('detalle_pedido_clientes');
    }
}
