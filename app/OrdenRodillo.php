<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenRodillo extends Model
{
    protected $table = 'produccion_rodillo';

    protected $fillable = [
        'id_cliente','id_tipo_servicio','id_material','id_tipo_material','descripcion',
        'piezas_fabricar','fecha_pedido','fecha_comprom',
        'fecha_termino_produccion','tiempo_respuesta','id_estatus','operador'
    ];

    protected $primaryKey = 'id';
}