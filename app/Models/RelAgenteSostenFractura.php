<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAgenteSostenFractura extends Model
{
    use HasFactory;
    protected $table = 'rel_agente_sosten_fractura';

    protected $fillable = [
        'solicitud_id',
        'id_agente'
    ];
}
