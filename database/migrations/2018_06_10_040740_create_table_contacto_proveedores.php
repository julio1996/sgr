<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContactoProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_contacto', 100);

            $table->integer('tipoContacto_proveedor_id')->unsigned();
            $table->foreign('tipoContacto_proveedor_id')->references('id')->on('tipo_contacto_proveedores');
            
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
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
        Schema::dropIfExists('contacto_proveedores');
    }
}
