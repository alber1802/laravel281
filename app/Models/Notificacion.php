<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function recibes()
    {
        return $this->hasMany(Recibe::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
} 


