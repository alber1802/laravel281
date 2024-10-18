<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    use HasFactory;

    protected $table = 'qrs';


    protected $fillable = [
        'id_metodoP', 
        'pago_codigo', 
    ];


    public function Pago()
    {
        return $this->belongsTo(Pago::class, 'id_metodoP', 'id_metodoP');
    }
}
