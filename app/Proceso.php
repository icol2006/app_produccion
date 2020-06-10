<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'proceso';

    protected $fillable = [
        'nombre', 'descripcion', 'id_tipo_servicio'
    ];

    protected $primaryKey = 'id';

    // function material() {
    //     return $this->hasOne(Material::class, 'id');
    // }
}
