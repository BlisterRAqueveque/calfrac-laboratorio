<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLodo_Lodos extends Model
{
    use HasFactory;
    protected $table = 'tipo_lodos_Lodos';

    protected $fillable = [
        'nombre',
        'estado'
    ];
}
