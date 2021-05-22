<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    // RELACION 1 A MUCHOS INVERSA CON productos
    public function productos(){
      return $this->belongsTo('App\Models\Producto');
    }
    // RELACION UNO A MUCHOS CON ingredientes
    public function ingredientes(){
      return $this->belongsToMany('App\Models\Ingrediente');
    }

}
