<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {

            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');

            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->dropForeign('empleados_persona_id_foreign');
            $table->dropForeign('empleados_cargo_id_foreign');
        });
    }
}
