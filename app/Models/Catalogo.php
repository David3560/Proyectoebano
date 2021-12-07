<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogo extends Model
{

    use HasFactory;


    //relacion de uno a muchos
    public function Empleado(){
    return $this->belongsTo(\App\Models\Empleado::class, 'empleadoFK');
       // return $this->belongsTo('App\Models\producto', 'id');
    }



    protected $primaryKey = 'idCatalogo';
}
