<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAgua extends Model
{
    use HasFactory;
    protected $table = 'tipo_agua';

    protected $fillable = [
        'nombre',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
