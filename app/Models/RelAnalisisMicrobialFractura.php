<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAnalisisMicrobialFractura extends Model
{
    use HasFactory;
    protected $table = 'rel_analisis_microbial_fractura';

    protected $fillable = [
        'solicitud_id',
        'id_analisis'
    ];
}
