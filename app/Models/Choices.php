<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choices extends Model
{
    use HasFactory;
    protected $table = 'choices';

    protected $fillable = [
        'choices'
    ];
    
    public function solicitud_lodo() {
        return $this->hasMany(SolicitudLodo::class);
    }

}
