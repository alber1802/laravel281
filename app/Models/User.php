<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    protected $primaryKey = 'id_usuario';
    
    public function repartidos()
    {
        return $this->hasMany(Repartido::class); // Relaciona el 'user_id' con el modelo 'User'
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class); // Relaciona el 'user_id' con el modelo 'User'
    }

    public function artesanos()
    {
        return $this->hasMany(Artesano::class); // Relaciona el 'user_id' con el modelo 'User'
    }

    public function recibes()
    {
        return $this->hasMany(Recibe::class);
    }
    
    public function notificacions()
    {
        return $this->hasMany(Notificacion::class);
    }
}
