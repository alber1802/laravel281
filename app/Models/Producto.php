<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrito;  
use App\Models\Incluye;  //


class Producto extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false; 
    protected $table = 'productos'; 
      // Especifica la clave primaria
    protected $primaryKey = 'id_producto';

   

    public function categoria()
    {
       // return $this->belongsTo(Categoria::class); 
     
       return $this->belongsTo(Categoria::class, 'id_categoria');
    
    }
    public function publica()
    {
        return $this->hasMany(Publica::class); 
    }

    public function obtiene()
    {
        return $this->hasMany(Obtiene::class); 
    }

    public function incluyes()
    {
        return $this->hasMany(Incluye::class, 'id_producto','id_producto'); 
    }

    public function carritos()
    {
        return $this->belongsToMany(Carrito::class, 'incluyes', 'id_producto', 'id_carrito')
                    ->withPivot('cantidadPP', 'created_at', 'updated_at');
    }

}
