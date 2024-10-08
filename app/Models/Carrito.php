<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function incluyes()
    {
        return $this->hasMany(Incluye::class); 
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

}
