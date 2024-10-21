<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    protected $table = 'tarjetas';
    protected $primaryKey = 'id_tarjeta';
    public $incrementing = true;

    protected $fillable = [
        'id_pago',
        'numero_cuenta',
        'nombre_titular',
        'fecha_expiracion',
        'cvv',
        'tipo_tarjeta',
        'monto',
    ];

    public function pago()
    {
        return $this->belongsTo(Pago::class,'id_pago');
    }
}
