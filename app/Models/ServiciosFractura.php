<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiciosFractura extends Model
{
    use HasFactory;
    protected $table = 'servicios_fractura';
    protected $fillable = [
        'id',
        'opciones',
        'estados',
    ];
}
