<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/materias/{pagina}', [MateriaController::class, 'materias'])->name('materias');
Route::get('/mostrarMateria/{titulo}', [MateriaController::class, 'mostrar_materia'])->name('mostrar_materia');


