<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Carrito;  
use App\Models\Producto; 

class Incluye extends Model
{
    use HasFactory;

    protected $table = 'incluyes';
    
    protected $fillable = ['id_carrito', 'id_producto', 'cantidadPP',	'created_at',	'updated_at'];

    public function incluyes()
    {
        return $this->hasMany(Incluye::class, 'id_producto', 'id_producto'); 
    }

    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'id_carrito','id_carrito'); 
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto','id_producto');
    }

}