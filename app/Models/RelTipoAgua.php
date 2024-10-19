<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelTipoAgua extends Model
{
    use HasFactory;
    protected $table = 'rel_tipo_agua';

    protected $fillable = [
        'solicitud_id',
        'id_tipo'
    ];
}
