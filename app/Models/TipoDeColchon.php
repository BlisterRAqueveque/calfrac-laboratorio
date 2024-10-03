<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDeColchon extends Model
{
    use HasFactory;
    protected $table = 'tipo_de_colchon';

    protected $fillable = [
        'nombre',
        'estado',
    ];

}
