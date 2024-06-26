<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AguaLibre extends Model
{
    use HasFactory;
    protected $table = 'agua_libre';
    protected $fillable = [
        'id',
        'opciones',
    ];
}
