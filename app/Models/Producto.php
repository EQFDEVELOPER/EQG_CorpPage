<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Indicar que la llave primaria es 'clave'
    protected $primaryKey = 'clave';

    // Indicar que la llave primaria no es autoincremental
    public $incrementing = false;

    // Indicar que el tipo de la llave primaria es string
    protected $keyType = 'string';

    // Definir los campos permitidos
    protected $fillable = [
        'clave',
        'laboratorio',
        'nombre',
        'presentacion',
        'sustancia',
        'precio',
        'imagen'
    ];
}
