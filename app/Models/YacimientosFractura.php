<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YacimientosFractura extends Model
{
    use HasFactory;

    protected $table = 'yacimientos_fractura';

    protected $fillable = [
        'nombre',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
