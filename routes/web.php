<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/data', [TamuController::class, 'data']);
Route::post('/daftar', [TamuController::class, 'daftar']);