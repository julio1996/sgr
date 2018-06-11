<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngredientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->date('fecha_alta');
            $table->string('observacion', 100);
            $table->string('marca', 50);
            $table->date('fecha_creacion');
            $table->date('fecha_vencimiento');

            $table->integer('tipoIngrediente_id')->unsigned();
            $table->foreign('tipoIngrediente_id')->references('id')->on('tipo_ingredientes');

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
        Schema::dropIfExists('ingredientes');
    }
}
