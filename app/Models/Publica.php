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

    public function artesano()
    {
        return $this->belongsTo(Artesano::class); // Relación con el modelo 'Artesano'
    }
    
    public function producto()
    {
        return $this->belongsTo(Producto::class); // Relación con el modelo 'Artesano'
    }

}
