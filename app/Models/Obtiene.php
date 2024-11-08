<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obtiene extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = ['id_resena', 'id_producto'];
    protected $guarded = [];
    protected $fillable = ['id_producto', 'id_resena'];

    public function publicas()
    {
        return $this->hasMany(Categoria::class); 
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }

    public function resena()
    {
        return $this->belongsTo(Resena::class, 'id_resena', 'id_resena');
    }
}
