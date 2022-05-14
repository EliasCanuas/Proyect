<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrador extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'contrasenia',
        'articulo',
        'stock',
        'precio',
        'venta',
        'facturas'
    ];
}
