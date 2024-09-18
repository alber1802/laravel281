<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function repartidos()
    {
        return $this->hasMany(repartido::class);
    }
}
