<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'user_id',
        'estado',
        'version'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Retorna solo los equipos con la ultima version
    public function getLastVersion($query)
    { {
            $query
                ->where('estado', 1)
                ->selectSub(function ($query) {
                    $query
                        ->selectRaw('MAX(version)')
                        ->from('equipos')
                        ->whereColumn('id', 'equipos.id');
                }, 'latest_version')
                ->groupBy('id')
                ->having('latest_version', '>', 'equipos.version');
        }
        /**Se llama de la siguiente manera
         * $equipos = Equipos::getLastVersion()->get();
         */
    }
}
