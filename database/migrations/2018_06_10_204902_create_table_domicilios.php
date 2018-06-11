<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDomicilios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('descripcion_calle', 100);
            $table->string('descripcion_altura', 100);

            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');

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
        Schema::dropIfExists('domicilios');
    }
}
