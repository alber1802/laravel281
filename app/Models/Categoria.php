<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $guarded = [];
 // Especificar el nombre de la tabla si no sigue la convención de Laravel
 protected $table = 'categorias';

 // Especificar la clave primaria si no es 'id'
 protected $primaryKey = 'id_categoria';
    public function categorias()
    {
        return $this->hasMany(Categoria::class); 
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
}
