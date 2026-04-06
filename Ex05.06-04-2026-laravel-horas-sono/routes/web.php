<?php

use App\Http\Controllers\SonoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SonoController::class, 'index'])->name('sono.index');
Route::post('/resultado', [SonoController::class, 'resultado'])->name('sono.resultado');
