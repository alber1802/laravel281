<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    public $incrementing = true;
    protected $fillable = [
        'id_metodoP',
        'numero_cuenta',
        'nombre_titular',
        'fecha_expiracion',
        'cvv',
        'tipo',
    ];

    public function pagos()
    {
        return $this->hasMany(Pago::class,'id_metodoP');
    }
}
