<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artesano extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $primaryKey = 'id_artesano';

    public $timestamps = false; 
    protected $table = 'artesanos'; // Asegúrate de que este sea el nombre de la tabla


    public function user()
    {
        return $this->belongsTo(User::class, 'id_artesano', 'id_usuario');
    }

    // Relación: un artesano pertenece a una comunidad
    public function comunidad() 
    {
        return $this->belongsTo(Comunidad::class, 'id_comunidad');// Relaciona el 'comunidad_id' con el modelo 'Comunidad'

        return $this->belongsTo(Comunidad::class, 'id_comunidad'); // Relaciona el 'comunidad_id' con el modelo 'Comunidad'

    }

    public function publicas() 
    {
        return $this->hasMany(Publica::class, 'id_artesano', 'id_artesano'); // Relaciona el 'comunidad_id' con el modelo 'Comunidad'
    }
    /*public function artesano()
    {
        return $this->hasOne(Artesano::class, 'id_artesano');
    }
*/
}
