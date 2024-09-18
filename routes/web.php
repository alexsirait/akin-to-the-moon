<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrancoController;
use App\Http\Controllers\FrankController;
use App\Http\Controllers\OrangController;
use App\Http\Controllers\UserController;

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

Route::get('/user', [UserController::class, 'listuser']);
Route::get('/adduser', [UserController::class, 'adduser']);
Route::get('/simpan_user', [UserController::class, 'simpan_user']);

Route::get('/deleteuser', [UserController::class, 'delete_user']);




// edit
Route::get('/edit_user', [UserController::class, 'edit_user']);






























Route::get('/update_user', [UserController::class, 'update_user']);




