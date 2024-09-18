<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repartido extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class); // Relaciona el 'user_id' con el modelo 'User'
    } 
    
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

}
