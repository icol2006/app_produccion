<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcesoOrden extends Model
{
    protected $table = 'proceso_orden';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estatus',
        'operador',
        'piezas_terminadas',
        'id_orden_metal',
        'id_orden_rodillo'
    ];

    protected $primaryKey = 'id';

    function ordenMental() {
        return $this->hasOne(OrdenMetal::class, 'id');
    }

    function ordenRodillo() {
        return $this->hasOne(OrdenRodillo::class, 'id');
    }
}
