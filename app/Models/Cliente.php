<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


    //Funcion de la relacion UNO A UNO 1:1
    public function Usuario()
    {
      return $this->BelongsTo('App/Models/User');
    }

    //Funcion de la relacion Muchos a uno N:1


    protected $primaryKey = 'idCliente';
}
