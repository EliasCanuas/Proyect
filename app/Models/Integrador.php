<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrador extends Model
{
    use HasFactory;
    protected $fillable = [
        'articulo',
        'cantidad',
        'stock',
        'precio',
        'venta'
    ];
}
