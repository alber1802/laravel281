<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    protected $primaryKey = 'id_metodoP'; 
    public $incrementing = true;
    protected $guarded = [];


    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_metodoP');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class, 'id_metodoP');
    }

    public function paypals()
    {
        return $this->hasMany(Paypal::class, 'id_metodoP');
    }

    public function qrs()
    {
        return $this->hasMany(Qr::class, 'id_metodoP');
    }

}
