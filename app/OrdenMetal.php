<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenMetal extends Model
{
    protected $table = 'orden_metal';

    protected $fillable = [
        'id_cliente',
        'id_tipo_servicio',
        'id_material',
        'id_tipo_producto',
        'descripcion',
        'piezas_fabricar',
        'horas_teoricas',
        'piezas_reales',
        'fecha_pedido',
        'dias_transcurridos',
        'medidas_1mm',
        'medidas_2mm',
        'medidas_largo',
        'medidas_ancho',
        'medidas_espeso',
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
