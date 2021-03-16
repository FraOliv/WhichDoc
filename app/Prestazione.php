<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestazione extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id',
        'nome',
        'tipo',
        'prezzo',
        'descrizione',
        'disabilità'
    ];
}
