<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingenieros extends Model
{
    use HasFactory;
    protected $table = 'ingenieros';
    protected $fillable = [
        'id',
        'mail_id',
        'ingenieros_mails',
        'estado',
    ];
}
