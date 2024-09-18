<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    public function repartido()
    {
        return $this->belongsTo(Repartido::class);
    }

}
