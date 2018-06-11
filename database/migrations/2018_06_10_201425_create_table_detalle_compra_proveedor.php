<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleCompraProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compra_proveedor', function (Blueprint $table) {
            $table->increments('id');

            $table->float('precio');
            $table->integer('cantidad');
            
            $table->integer('ingrediente_id')->unsigned();
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');

            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('bebidas');

             $table->integer('cabeceraCompra_id')->unsigned();
            $table->foreign('cabeceraCompra_id')->references('id')->on('cabecera_compra_proveedor');
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
        Schema::dropIfExists('detalle_compra_proveedor');
    }
}
