<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    use HasFactory;
    protected $table = 'credenciales';

    protected $fillable = [
        'user_id',
        'fundamento'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
