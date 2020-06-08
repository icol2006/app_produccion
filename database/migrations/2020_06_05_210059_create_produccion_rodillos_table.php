<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionRodillosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion_rodillos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_tipo_servicio')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->string('descripcion');
            $table->integer('piezas_fabricar');
            $table->date('fecha_pedido');
            $table->date('fecha_comprom');
            $table->date('fecha_termino_produccion');
            $table->integer('tiempo_respuesta');
            $table->integer('id_estatus')->unsigned();
            $table->string('operador');
            $table->timestamps();
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('restrict');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio')->onDelete('restrict');
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('restrict');
            $table->foreign('id_estatus')->references('id')->on('estatus')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produccion_rodillos');
    }
}
