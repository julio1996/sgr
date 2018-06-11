<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('observacion', 50);
            $table->float('precio', 6, 2);
            $table->date('fecha_alta');

            $table->integer('tipoComida_id')->unsigned();
            $table->foreign('tipoComida_id')->references('id')->on('tipo_comidas');
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
        Schema::dropIfExists('comidas');
    }
}
