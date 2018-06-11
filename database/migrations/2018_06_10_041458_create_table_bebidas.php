<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBebidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebidas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 100);
            $table->string('observacion', 100);
            $table->float('precio_compra', 6, 2);
            $table->float('precio_venta', 6, 2);
            $table->date('fecha_embotellado');
            $table->date('fecha_vencimiento');
            $table->date('fecha_alta');
            $table->string('contenido_neto', 100);

            $table->integer('tipoBebida_id')->unsigned();
            $table->foreign('tipoBebida_id')->references('id')->on('bebidas');

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
        Schema::dropIfExists('bebidas');
    }
}
