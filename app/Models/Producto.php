<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrito;  
use App\Models\Incluye;  //


class Producto extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false; 

    protected $table = 'productos'; 

    protected $primaryKey = 'id_producto';



    protected $fillable = [
        'nombreP',
        'descripcionP',
        'materialP',
        'precioP',
        'stock',
        'colorP',
        'tipoP',
        'imgP',
        'imgP2',
        'imgP3',
        'descuentoP',
        'metodoP',
        'costoEnvio',
        'tiempoEntrega',
        'devolucionP',
        'garantiaP',
        'certificacionP',
        'autP',
        // Agrega otros campos según sea necesario
    ];

    public function categoria()
    {
       return $this->belongsTo(Categoria::class, 'id_categoria','id_categoria');
    }

    public function publica()
    {
        return $this->belongsTo(Publica::class, 'id_producto', 'id_producto');
    }
    public function obtiene()

    {
        return $this->hasMany(Obtiene::class); 
    }

    public function incluyes()
    {
        return $this->hasMany(Incluye::class, 'id_producto','id_producto'); 
    }

    public function carritos()
    {
        return $this->belongsToMany(Carrito::class, 'incluyes', 'id_producto', 'id_carrito')
                    ->withPivot('cantidadPP', 'created_at', 'updated_at');
    }

}
