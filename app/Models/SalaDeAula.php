<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaDeAula extends Model
{
    use HasFactory;
    protected $table = 'salas_de_aulas';

    protected $fillable = [
        'designacao',
        'funcionais',
        'nao_funcionais',
        'numero_total'
    ];
}
