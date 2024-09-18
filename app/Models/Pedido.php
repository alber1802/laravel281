<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    public function tarjeta()
    { 
        return $this->belongsTo(Tarjeta::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    } 

    public function repartido()
    {
        return $this->belongsTo(Repartido::class); 
    }


}
