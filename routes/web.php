<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/materias/{pagina}', [MateriaController::class, 'index'])->name('index');
Route::get('/mostrarMateria/{titulo}', [MateriaController::class, 'show'])->name('show');


