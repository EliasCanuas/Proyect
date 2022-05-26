<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jefe extends Model
{
    use HasFactory;
    protected $fillable = [
        'articulo',
        'precioventa',
        'proveedor'
    ];
}
