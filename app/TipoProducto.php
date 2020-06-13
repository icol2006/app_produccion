<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table = 'tipo_producto';

    protected $fillable = [
        'nombre', 
        'descripcion'
    ];

    protected $primaryKey = 'id';
}
