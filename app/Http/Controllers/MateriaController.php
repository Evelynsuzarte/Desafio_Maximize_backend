<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $pagina)
    {
        //
        return Materia::select('titulo', 'descricao', 'imagem', 'data_de_publicacao')->paginate(5, ['*'], 'pagina', $pagina);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $titulo)
    {
        //
        return Materia::where('titulo', $titulo)->firstOrFail();

    }


}
