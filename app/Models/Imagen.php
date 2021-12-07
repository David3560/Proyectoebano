<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $primaryKey = 'idImagen';

    protected $fillable = ['uuid', 'nombreImagen', 'imageProducto'];


    use HasFactory;

    public function Empleado()
    {
      return $this->hasMany('App/Models/Empleado');
    }


}
