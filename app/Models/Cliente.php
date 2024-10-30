<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_cliente';

    public function user()
    {

        return $this->belongsTo(User::class, 'id_cliente');

        return $this->belongsTo(User::class, 'id_cliente', 'id_usuario');

    }

    public function resenas()
    { 
        return $this->hasMany(Resena::class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}