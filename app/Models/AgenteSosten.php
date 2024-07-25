<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenteSosten extends Model
{
    use HasFactory;
    protected $table = 'agente_sosten';
    protected $fillable = [
        'id',
        'nombre',
        'activo',
    ];
    public function referenciasAgente()
    {
        return $this->hasMany(RelAgenteSostenFractura::class, 'id_agente');
    }
}
