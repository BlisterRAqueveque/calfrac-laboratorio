<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelEnsayosRequeridosLodo extends Model
{
    use HasFactory;

    protected $table = 'rel_ensayos_requeridos_lodo';

    protected $fillable = [
        'nombre',
        'id_ensayo'
    ];

    
}
