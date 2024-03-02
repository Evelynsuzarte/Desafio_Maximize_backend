<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/materias', [MateriaController::class, 'index'])->name('index');


