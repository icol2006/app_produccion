<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'proceso';

    protected $fillable = [
        'nombre', 
        'descripcion'
    ];

    protected $primaryKey = 'id';

}
