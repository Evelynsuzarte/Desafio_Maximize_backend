<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    /**
     * Mostra todas as matérias com paginação.
     * @return Materia 
     */
    public function materias(string $pagina)
    {
        
        return Materia::select('titulo', 'descricao', 'imagem', 'data_de_publicacao')->paginate(5, ['*'], 'pagina', $pagina);

    }

    /**
     * Mostra a matéria desejada
     * @return Materia 
     */
    public function mostrar_materia(string $titulo)
    {

        try{
            $materia = Materia::where('titulo', $titulo)->firstOrFail();
            return $materia;
            
        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return response()->json(['mensagem' => 'Matéria não encontrada.'], 404);
        }
        

    }


}
