<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCotizado extends Model
{
    protected $table = "productos_cotizados";
    protected $fillable = ["id_cotizacion", "nombreProducto", "descripcionProducto", "costoProducto"];
}
