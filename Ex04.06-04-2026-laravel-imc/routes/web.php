<?php

use App\Http\Controllers\ImcController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ImcController::class, 'index'])->name('imc.index');
Route::post('/resultado', [ImcController::class, 'resultado'])->name('imc.resultado');
