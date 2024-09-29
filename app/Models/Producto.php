<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false; 
      // Especifica la clave primaria
      protected $primaryKey = 'id_producto';
   protected $table = 'productos'; // Asegúrate de que este sea el nombre de la tabla

   

    public function categoria()
    {
       // return $this->belongsTo(Categoria::class); 
     
       return $this->belongsTo(Categoria::class, 'id_categoria');
    
    }
    public function publicas()
    {
        return $this->hasMany(Publica::class); 
    }

    public function obtienes()
    {
        return $this->hasMany(Obtiene::class); 
    }

    public function incluyes()
    {
        return $this->hasMany(Incluye::class); 
    }

}
