<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = [
        'nombre', 'id_material', 'id_tipo_material'
    ];

    protected $primaryKey = 'id';

    function material() {
        return $this->hasOne(Material::class, 'id');
    }

    function tipoMaterial() {
        return $this->hasOne(TipoMaterial::class, 'id');
    }
}
