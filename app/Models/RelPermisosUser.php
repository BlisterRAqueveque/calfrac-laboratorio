<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelPermisosUser extends Model
{
    use HasFactory;
    protected $table = 'rel_permisos_user';

    protected $fillable = [
        'user_id',
        'permiso_id',
        'permiso',
    ];

    public function permiso() {
        return $this->hasMany(Permisos::class);
    }

    public function user() {
        return $this->hasMany(User::class);
    }
}
