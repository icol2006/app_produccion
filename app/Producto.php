<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = [
        'nombre', 
        'id_material', 
        'id_tipo_producto'
    ];

    protected $primaryKey = 'id';

    function material() {
        return $this->hasOne(Material::class, 'id','id_material');
    }

    function tipoProducto() {
        return $this->hasOne(TipoProducto::class, 'id','id_tipo_producto');
    }
}
