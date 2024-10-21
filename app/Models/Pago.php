<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    protected $primaryKey = 'id_pago'; 
    public $incrementing = true;

    protected $fillable = [
        'id_cliente',
        'id_pedido',
        'monto',
        'tipo_metodo',
        'estado_pago',
    ];


    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class, 'id_pago','id_pago');
    }

    public function paypals()
    {
        return $this->hasMany(Paypal::class, 'id_pago','id_pago');
    }

    public function qrs()
    {
        return $this->hasMany(Qr::class, 'id_pago','id_pago');
    }

}
