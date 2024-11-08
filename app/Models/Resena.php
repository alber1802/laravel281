<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model  
{
    use HasFactory; 
    protected $table = 'resenas';  // Nombre de la tabla
    protected $primaryKey = 'id_resena';
    protected $guarded = [];
    protected $fillable = ['comentario', 'calificacionR', 'fecha_resena', 'id_usuario'];
    
    public function users()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }

    // Relación con el modelo Obtiene (una reseña puede estar en varios productos)
    

    public function obtiene()
    {
        return $this->hasOne(Obtiene::class, 'id_resena', 'id_resena');
    }

}
