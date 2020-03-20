<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discografia extends Model
{
    protected $fillable = [
        'nome_album',
        'img_capa',
        'gravadora',
        'ano_gravacao',
        'ano_lancamento',
        'produtor',
        'numero_catalogo_album',
        'id_banda',
        'id_midia'
    ];
}
