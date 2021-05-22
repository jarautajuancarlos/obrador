<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // RELACION MUCHOA A MUCHOS INVERSA
    public function comandas(){
      return $this->belongsToMany('App\Models\Comanda');
    }

    // RELACION MUCHOA A MUCHOS INVERSA
    public function categorias(){
      return $this->belongsToMany('App\Models\Categoria');
    }

    // RELACION UNO A MUCHOS CON recetas
    public function recetas(){
      return $this->belongsToMany('App\Models\Receta');
    }
}
