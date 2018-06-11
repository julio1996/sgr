<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_contacto', 50);

            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');

            $table->integer('tipoContacto_id')->unsigned();
            $table->foreign('tipoContacto_id')->references('id')->on('tipo_contactos');            
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
        Schema::dropIfExists('contacto');
    }
}
