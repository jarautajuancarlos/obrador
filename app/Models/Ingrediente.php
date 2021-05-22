<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    // RELACION UNO A MUCHOS CON ingredientes
    public function recetas(){
      return $this->belongsToMany('App\Models\Receta');
    }

}
