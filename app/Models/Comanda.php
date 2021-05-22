<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    // RELACION 1 A MUCHOS INVERSA CON USER
    public function user(){
      return $this->belongsTo('App\Models\User');
    }

    // RELACION MUCHOS A MUCHOS CON PRODUCTOS
    public function productos(){
      return $this->belongsToMany('App\Models\Producto');
    }

}
