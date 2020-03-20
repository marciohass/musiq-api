<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable = [
        'ordenacao',
        'nome_musica',
        'tempo',
        'compositor',
        'letra',
        'cifra',
        'youtube',
        'id_discografia'
    ];
}
