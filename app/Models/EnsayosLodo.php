<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnsayosLodo extends Model
{
    use HasFactory;
    //protected $table = 'tipo_ensayos_lodo';
    protected $table = 'ensayos_lodo';
    protected $fillable=[
        'nombre'
    ];
}
