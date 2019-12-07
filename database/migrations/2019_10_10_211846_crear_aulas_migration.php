<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearAulasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('aulas');
        Schema::create('aulas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->integer("capacidad");
            $table->unsignedInteger("id_edificio");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aulas');
        Schema::table('aulas', function (Blueprint $table) {
            //
        });
    }
}
