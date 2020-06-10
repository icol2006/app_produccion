<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenMetal extends Model
{
    protected $table = 'produccion_metal';

    protected $fillable = [
        'id_cliente','id_tipo_servicio','id_material','id_tipo_material','descripcion',
        'piezas_fabricar','horas_teoricas','piezas_reales','fecha_pedido date ',
        'dias_transcurridos','medidas_1mm','medidas_2mm','medidas_largo','medidas_ancho',
        'medidas_espeso','id_estatus'
    ];

    protected $primaryKey = 'id';

    function cliente() {
        return $this->hasOne(Cliente::class, 'id');
    }

    function tipoServicio() {
        return $this->hasOne(TipoServicio::class, 'id');
    }

    function estatus() {
        return $this->hasOne(Estatus::class, 'id');
    }

}
