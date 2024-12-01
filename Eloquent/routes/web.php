<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;




////
Route::view('/', 'inicio')->name('rutainicio');
Route::resource('cliente', ClienteController::class);

