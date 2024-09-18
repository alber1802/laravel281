<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artesano extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class); // Relaciona el 'user_id' con el modelo 'User'
    }

    // Relación: un artesano pertenece a una comunidad
    public function comunidad() 
    {
        return $this->belongsTo(Comunidad::class); // Relaciona el 'comunidad_id' con el modelo 'Comunidad'
    }

    public function publicas() 
    {
        return $this->hasMany(Publica::class); // Relaciona el 'comunidad_id' con el modelo 'Comunidad'
    }

}
