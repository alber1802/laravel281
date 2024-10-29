<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\User;

class Pedido extends Model
{
    use HasFactory;
    
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    public $incrementing = true;
    protected $dates = ['fecha_pedido'];
    
    protected $fillable = [
        'total_pagar',
        'descuento',
        'fecha_pedido',
        'estadoP',
        'id_carrito',
        'id_usuario',
    ];

    public function carrito()
    {
        return $this->belongsTo(Carrito::class, 'id_carrito');
    }


    public function cliente()
    {
        return $this->belongsTo(Cliente::class,'id_cliente');
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

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_pedido', 'id_pedido');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
        

}
