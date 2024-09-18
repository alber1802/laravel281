<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibe extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function notificacion()
    {
        return $this->belongsTo(Notificacion::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
