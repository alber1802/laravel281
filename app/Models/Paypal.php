<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    use HasFactory;


    protected $table = 'paypals';

    protected $fillable = [
        'id_metodoP',
        'correo',
        'contraseña',
        'tipo_pago',
        'monto',
    ];

    public function pagos()
    {
        return $this->hasMany(Pago::class,'id_metodoP');
    }
}
