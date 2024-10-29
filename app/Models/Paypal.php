<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    use HasFactory;


    protected $table = 'paypals';
    protected $primaryKey = 'id_paypal';
    public $incrementing = true;
    protected $fillable = [
        'id_pago',
        'correo',
        'tipo_tarjeta',
        'monto',
    ];

    public function pago()
    {
        return $this->belongsTo(Pago::class,'id_pago');
    }
}
