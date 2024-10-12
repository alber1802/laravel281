<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $guarded = [];
    protected $primaryKey = 'id_categoria';
    protected $fillable = ['nombreCa', 'descripcion'];
    public function categorias()
    {
        
        return $this->hasMany(Categoria::class); 
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
}
