<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarrios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barrios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('descripcion', 100);
            $table->integer('domicilio_id')->unsigned();
            $table->foreign('domicilio_id')->references('id')->on('domicilios');

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
        Schema::dropIfExists('barrios');
    }
}
