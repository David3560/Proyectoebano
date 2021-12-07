<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $primaryKey = 'idProducto';

    use HasFactory;

    public function catalogo(){
        return $this->hasMany('App\Models\Catalogo', 'idCatalogo');
       // return $this->hasMany('App\Models\imagen', 'idImagen');
    }

    public function materials(){
        return $this->belongsTo(\App\Models\Material::class, 'idMaterialFK');
    }

    public function tipoProducto(){
        return $this->belongsTo(\App\Models\TipoProducto::class, 'idTipoProductoFK');
    }

    public function colorProducto(){
        return $this->belongsTo(\App\Models\ColorProducto::class, 'idColorProductoFK');
    }
}
