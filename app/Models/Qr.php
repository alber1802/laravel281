<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    use HasFactory;

    protected $table = 'qrs';
    protected $primaryKey = 'id_qr';
    public $incrementing = true;

    protected $fillable = [
        'id_pago',
        'pago_codigo',
        'monto',
    ];

    public function Pago()
    {
        return $this->belongsTo(Pago::class, 'id_pago');
    }
}
