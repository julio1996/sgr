<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCabVentaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_venta_clientes', function (Blueprint $table) {
            $table->increments('id');

            $table->date('fecha');
            $table->float('importe_total', 6,2);
            $table->string('nro_factura');
            $table->time('hora_retiro');
            $table->string('tipo_factura', 100);
           
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            
            $table->integer('bebida_id')->unsigned();
            $table->foreign('bebida_id')->references('id')->on('bebidas');

            


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
        Schema::dropIfExists('cab_venta_clientes');
    }
}
