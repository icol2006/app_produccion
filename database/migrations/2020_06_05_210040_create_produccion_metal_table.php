<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionMetalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion_metal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_tipo_servicio')->unsigned();
            $table->integer('id_material')->unsigned();
            $table->integer('id_tipo_material')->unsigned();
            $table->string('descripcion');
            $table->integer('piezas_fabricar');
            $table->integer('piezas_producidas');
            $table->integer('horas_teoricas');
            $table->integer('piezas_reales');
            $table->date('fecha_pedido');
            $table->integer('dias_transcurridos');
            $table->integer('medidas_1mm');
            $table->integer('medidas_2mm');
            $table->integer('medidas_largo');
            $table->integer('medidas_ancho');
            $table->integer('medidas_espeso');
            $table->integer('id_estatus')->unsigned();
            $table->timestamps();
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('restrict');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio')->onDelete('restrict');
            $table->foreign('id_material')->references('id')->on('material')->onDelete('restrict');
            $table->foreign('id_tipo_material')->references('id')->on('tipo_material')->onDelete('restrict');
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
        Schema::dropIfExists('produccion_metal');
    }
}
