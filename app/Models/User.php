<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'username',
        'email',
        'telefono',
        'img',
        'grupo_id',
        'password',
        'usuario_carga_id',
        'estado',
        'firma'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function permisos() {
        return $this->hasMany(RelPermisosUser::class);
    }

    public function credenciales() {
        return $this->hasMany(Credencial::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function user_carga()
    {
        return $this->belongsTo(User::class, 'usuario_carga_id');
    }
}
