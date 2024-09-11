<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrancoController;
use App\Http\Controllers\FrankController;
use App\Http\Controllers\OrangController;

Route::get('/listhpmahal', [FrancoController::class, 'listhpmahal']);
Route::get('/hargahpmahal', [FrancoController::class, 'hargahpmahal_func']);
Route::get('/barang', [FrancoController::class, 'barang']);
Route::get('/add_barang', [FrancoController::class, 'add_barang']);
Route::get('/simpan_data', [FrancoController::class, 'simpan_data']);


Route::get('/hewan', [FrankController::class, 'listhewan']);
Route::get('/addhewan', [FrankController::class, 'addhewan']);
Route::get('/simpan_hewan', [FrankController::class, 'simpan_hewan']);

Route::get('/orang', [OrangController::class, 'listorang']);
Route::get('/addorang', [OrangController::class, 'addorang']);

Route::get('/simpan_orang', [OrangController::class, 'simpan_orang']);
