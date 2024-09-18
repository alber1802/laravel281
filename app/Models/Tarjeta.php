<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;
    protected $primaryKey = 'numero_cuenta';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
