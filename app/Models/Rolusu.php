<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolusu extends Model
{
    use HasFactory;

    protected $table='rolusus';






    //Funcion de la relacion UNO A UNO 1:1
    public function Usuario()
    {
      return $this->hasOne('App/Models/User', 'idUsuario');
    }

    protected $primaryKey = 'idRolusu';

}



