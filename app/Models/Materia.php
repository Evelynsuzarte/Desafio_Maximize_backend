<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    protected $fillable = [
        'ID',
        'titulo',
        'descricao',
        'texto_completo',
        'imagem',
        'data_de_publicacao'
    ];
}