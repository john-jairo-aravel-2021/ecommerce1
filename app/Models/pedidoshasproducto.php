<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidoshasproducto extends Model
{
    use HasFactory;
    public function producto(){
        return $this->hasMany(producto::class);
    }
   
    public function pedido(){
        return $this->hasMany(pedido::class);
    }
}
