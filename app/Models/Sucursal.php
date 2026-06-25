<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    // Laravel busca por defecto una columna llamada 'id'.
    // Como la tuya se llama 'id_sucursal', debemos especificarla:
    protected $primaryKey = 'id_sucursal';

    protected $fillable = [
        'ceco',
        'ce',
        'nombre_sucursal'
    ];
}
