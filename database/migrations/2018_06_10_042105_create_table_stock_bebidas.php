<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStockBebidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_bebidas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cantidad_minima');
            $table->integer('cantidad_actual');

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
        Schema::dropIfExists('stock_bebidas');
    }
}
