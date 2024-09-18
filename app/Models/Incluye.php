<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incluye extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = ['id_carrito', 'id_producto'];
    protected $guarded = [];

    public function producto()
    {
        return $this->belongsTo(Producto::class); 
    }

    public function carrito()
    {
        return $this->belongsTo(Carrito::class); 
    }
}