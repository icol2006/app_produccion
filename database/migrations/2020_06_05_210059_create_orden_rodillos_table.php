<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenRodillosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_rodillo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_tipo_servicio')->unsigned();
            $table->integer('id_material')->unsigned();
            $table->integer('id_tipo_producto')->unsigned();
            $table->string('descripcion')->nullable();
            $table->integer('piezas_fabricar');
            $table->date('fecha_pedido');
            $table->date('fecha_comprom');
            $table->date('fecha_termino_produccion');
            $table->integer('tiempo_respuesta');
            $table->string('estatus');
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('restrict');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio')->onDelete('restrict');
            $table->foreign('id_material')->references('id')->on('material')->onDelete('restrict');
            $table->foreign('id_tipo_producto')->references('id')->on('tipo_producto')->onDelete('restrict');
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
        Schema::dropIfExists('orden_rodillo');
    }
}
