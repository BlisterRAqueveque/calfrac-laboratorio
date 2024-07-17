<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenteSostenFractura extends Model
{
    use HasFactory;
    protected $table = 'agente_sosten_fractura';
    protected $fillable = [
        'id',
        'opciones',
        'estado',
        'check',
    ];
}
