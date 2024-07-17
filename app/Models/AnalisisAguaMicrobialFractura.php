<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisAguaMicrobialFractura extends Model
{
    use HasFactory;
    protected $table = 'analisis_agua_microbial';
    protected $fillable = [
        'id',
        'opciones',
        'estado',
        'check',
    ];
}
