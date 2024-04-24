<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MudCompany extends Model
{
    use HasFactory;
    protected $table = 'mud_company';

    protected $fillable = [
        'nombre',
        'activo',
    ];
}
