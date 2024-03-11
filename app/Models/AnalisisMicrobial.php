<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisMicrobial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'analisis_microbial';
}
