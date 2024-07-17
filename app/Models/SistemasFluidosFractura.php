<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemasFluidosFractura extends Model
{
    use HasFactory;
    protected $table = 'sistemas_fluidos_fractura';
    protected $fillable = [
        'id',
        'opciones',
        'estado',
    ];
}
