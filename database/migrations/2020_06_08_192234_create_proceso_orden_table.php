<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_orden', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('estatus');
            $table->string('operador');
            $table->integer('piezas_terminadas');
            $table->integer('id_orden_metal')->unsigned()->nullable();
            $table->integer('id_orden_rodillo')->unsigned()->nullable();
            $table->foreign('id_orden_metal')->references('id')->on('orden_rodillo')->onDelete('restrict');
            $table->foreign('id_orden_rodillo')->references('id')->on('orden_metal')->onDelete('restrict');
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
        Schema::dropIfExists('proceso_orden');
    }
}
