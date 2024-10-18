<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Conversor;

Route::get('/inicio', [Conversor::class, 'welcome'])->name('rutainicio');
Route::match(['get', 'post'], '/repaso1', [Conversor::class, 'repaso1'])->name('rutaRepaso1');


/* Route::get('/', function () {
    return view('inicio');
});

Route::view('/','inicio',)->name('rutainicio'); 

Route::view('/repaso1','repaso1')->name('rutaRepaso1'); 
 */