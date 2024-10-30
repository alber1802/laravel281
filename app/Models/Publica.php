<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publica extends Model
{
    use HasFactory; 
    public $incrementing = false;
    protected $primaryKey = ['id_artesano', 'id_producto'];
    protected $guarded = [];
    protected $table = 'publicas'; 

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto'); // Ajusta los nombres de las claves según tu base de datos
    }
    public function artesano()
    {
        return $this->belongsTo(Artesano::class, 'id_artesano', 'id_artesano'); // Relación con el modelo 'Artesano'
    }


    public function productos()
    {
        
        return $this->hasMany(Producto::class, 'id_producto', 'id_producto','id'); // Ajusta los nombres de las claves según tu base de datos
    }

}
