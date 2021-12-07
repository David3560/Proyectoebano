<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo("App\Models\Cliente", "idCliente");
    }

    public function productos()
    {
        return $this->hasMany("App\Models\ProductoCotizado", "id_cotizacion");
    }
}
