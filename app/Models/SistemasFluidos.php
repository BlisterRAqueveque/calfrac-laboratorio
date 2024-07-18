<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemasFluidos extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'sistemas_fluidos';
    protected $fillable = [
        'id',
        'nombre',
        'activo',
    ];
}
