<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    protected $fillable = [
        'nome',
        'integrante1',
        'integrante2',
        'integrante3',
        'integrante4',
        'integrante5',
        'integrante6',
        'historia',
        'id_categoria',
        'origem',
        'id_pais',
        'periodo_atividade',
        'pagina_oficial'
    ];
}
