<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tarea';

    protected $fillable = [
        'nombre', 'descripcion', 'id_tipo_servicio'
    ];

    protected $primaryKey = 'id';

    // function material() {
    //     return $this->hasOne(Material::class, 'id');
    // }
}
