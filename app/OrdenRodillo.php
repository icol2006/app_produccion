<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenRodillo extends Model
{
    protected $table = 'orden_rodillo';

    protected $fillable = [
        'id_cliente',
        'id_tipo_servicio',
        'id_material',
        'id_tipo_producto',
        'descripcion',
        'piezas_fabricar',
        'fecha_pedido',
        'fecha_comprom',
        'fecha_termino_produccion',
        'tiempo_respuesta',
        'estatus'
    ];

    protected $primaryKey = 'id';

    function cliente() {
        return $this->hasOne(Cliente::class, 'id','id_cliente');
    }

    function tipoServicio() {
        return $this->hasOne(TipoServicio::class, 'id','id_tipo_servicio');
    }

    function material() {
        return $this->hasOne(Material::class, 'id','id_material');
    }

    function tipoProducto() {
        return $this->hasOne(TipoProducto::class, 'id','id_tipo_producto');
    }
}
