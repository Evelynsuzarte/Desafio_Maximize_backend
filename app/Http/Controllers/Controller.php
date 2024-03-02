<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function buscarMateria (Request $request){

        include("db.php");
        $sql = "SELECT * FROM materia WHERE nome = '$request->fnome'";
        $query = mysqli_query($connect, $sql);
        $dado = mysqli_fetch_array($query);

    }
}

