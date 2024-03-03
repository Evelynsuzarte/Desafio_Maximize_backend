<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'texto_completo',
        'imagem',
        'data_de_publicacao'
    ];
}