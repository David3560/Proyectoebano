<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colorproducto extends Model
{
    use HasFactory;


    public function Empleado()
    {
      return $this->hasMany('App/Models/Empleado');
    }

    protected $primaryKey = 'idColorProducto';
}
