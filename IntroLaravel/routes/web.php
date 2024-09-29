<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('inicio');
});

Route::view('/','inicio',)->name('rutainicio'); 

Route::view('/formulario','formulario')->name('rutaformulario'); 

Route::view('/clientes','clientes')->name('rutaclientes');