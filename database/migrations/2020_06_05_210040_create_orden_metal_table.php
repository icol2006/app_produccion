<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenMetalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_metal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_tipo_servicio')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->string('descripcion');
            $table->integer('piezas_fabricar');
            $table->integer('horas_teoricas');
            $table->integer('piezas_reales');
            $table->date('fecha_pedido');
            $table->integer('dias_transcurridos');
            $table->integer('medidas_1mm');
            $table->integer('medidas_2mm');
            $table->integer('medidas_largo');
            $table->integer('medidas_ancho');
            $table->integer('medidas_espeso');
            $table->string('estatu');
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('restrict');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio')->onDelete('restrict');
            $table->foreign('id_producto')->references('id')->on('producto')->onDelete('restrict');
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
        Schema::dropIfExists('orden_metal');
    }
}
