<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    
    protected $table = 'pedidos';
    public $incrementing = true;
    
    protected $fillable = [
        'total_pagar',
        'descuento',
        'fecha_pedido',
        'estadoP',
        'id_carrito',
        'id_cliente',
        'id_metodoP',
    ];

    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'id_carrito');
    }

    public function pagos()
    {
        return $this->belongsTo(Pago::class, 'id_metodoP');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'id_cliente');
    } 

    public function repartido()
    {
        return $this->belongsTo(Repartido::class,'id_repartidor'); 
    }

    
    public function productos()
    {
        return $this->hasManyThrough(
            Producto::class,
            Incluye::class,
            'id_carrito', 
            'id_producto',
            'id_carrito',
            'id_carrito'  
        );
    }
    

}
