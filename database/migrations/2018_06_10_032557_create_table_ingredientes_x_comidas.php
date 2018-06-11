<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngredientesXComidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes_x_comidas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('cantidad_utilizada', 6, 2);

            $table->integer('ingrediente_id')->unsigned();
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');

            $table->integer('comida_id')->unsigned();
            $table->foreign('comida_id')->references('id')->on('comidas');
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
        Schema::dropIfExists('ingredientes_x_comidas');
    }
}
