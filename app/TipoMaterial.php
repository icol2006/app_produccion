<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMaterial extends Model
{
    protected $table = 'tipo_material';

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    protected $primaryKey = 'id';
}
