<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidad extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_comunidad';

    // Relación: una comunidad tiene muchos artesanos
    public function artesanos()
    {
        return $this->hasMany(Artesano::class); // Relación con el modelo 'Artesano'
    }
} 