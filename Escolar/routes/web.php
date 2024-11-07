<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuardarUtiles;



Route::get('/', [GuardarUtiles::class, 'formUtiles'])->name('escolar');
Route::post('/enviar', [GuardarUtiles::class, 'SalvarUtiles']);

/* 
Route::get('/', function () {
    return view('welcome');
});


 */
