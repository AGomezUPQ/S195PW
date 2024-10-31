<?php

use Illuminate\Support\Facades\Route;
use storage\app\storage\public;
use App\Http\Controllers\ControlarVistas;


Route::get('/',[ControlarVistas::class,'home'])->name('rutainicio');
Route::get('/formulario',[ControlarVistas::class,'formulario'])->name('rutaformulario');



