<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Producto; // Importamos el modelo Producto
use App\Models\Incluye;  // Importamos el modelo Incluye si lo necesitas

class Carrito extends Model
{
    use HasFactory;
    protected $table = 'carritos';
    protected $primaryKey = 'id_carrito';
    protected $fillable = [
        'id_carrito',
        'id_cliente',
        'created_at',
        'updated_at'
    ];

    public function incluyes()
    {
        return $this->hasMany(Incluye::class,  'id_carrito', 'id_carrito'); 
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'incluyes', 'id_carrito', 'id_producto')
                    ->withPivot('cantidadPP', 'created_at', 'updated_at');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }
    /**public function pedido()
        {
            return $this->hasMany(Pedido::class, 'id_carrito');
        }
    */
}
