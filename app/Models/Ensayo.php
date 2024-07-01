<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ensayo extends Model
{
    use HasFactory;

    protected $fillable = [
        'incrementable',
        'tipo',
        'anio',
        'user_id',
        'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // public function aditivos()
    // {
    //     return $this->hasMany(RelAditivosEnsayos::class);
    // }

    // public function requerimientos()
    // {
    //     return $this->hasMany(RelRequerimientosEnsayos::class);
    // }

    // public function referencias()
    // {
    //     return $this->hasMany(RelEnsayoReferenciaSolicitud::class);
    // }
}
