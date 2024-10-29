<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repartido extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_repartidor';

    public $timestamps = false; 

    public function user()
    {

        return $this->belongsTo(User::class, 'id_artesano'); // Relaciona el 'user_id' con el modelo 'User'
    } 

    

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class, 'id_vehiculo'); 
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    use HasFactory;

    public function entregas()
    {
        return $this->hasMany(Entrega::class, 'id_repartidor'); 
    }

}
