<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStockIngredientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_ingredientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad_minima');
            $table->integer('cantidad_actual');

            $table->integer('unidadMedida_id')->unsigned();
            $table->foreign('unidadMedida_id')->references('id')->on('unidad_medidas');

            $table->integer('ingrediente_id')->unsigned();
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');

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
        Schema::dropIfExists('stock_ingredientes');
    }
}
