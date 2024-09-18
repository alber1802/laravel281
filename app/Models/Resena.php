<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model  
{
    use HasFactory; 
    protected $guarded = [];
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function obtienes()
    {
        return $this->hasMany(Obtiene::class); 
    }

}
