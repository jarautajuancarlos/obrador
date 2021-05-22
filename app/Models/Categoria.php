<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // RELACION MUCHOA A MUCHOS INVERSA
    public function productos(){
      return $this->belongsToMany('App\Models\Producto');
    }
}
