<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::view('/','inicio',)->name('rutainicio'); 

Route::view('/repaso1','repaso1')->name('rutaRepaso1'); 
