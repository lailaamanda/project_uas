<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabkotaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/kabkota/peta', [KabkotaController::class, 'index']);
Route::get('/kabkota/penduduk', [KabkotaController::class, 'penduduk']);