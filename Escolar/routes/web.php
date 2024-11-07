<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuardarUtiles;



Route::get('/', [GuardarUtiles::class, 'formUtiles'])->name('escolar');
Route::post('/enviar',[GuardarUtiles::class,'SalvarUtiles'])->name('procesar');

/* 
Route::get('/', function () {
    return view('welcome');
});


 */
