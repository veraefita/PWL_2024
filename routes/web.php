<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use Database\Seeders\KategoriSeeder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





// Route::get('/update-level', [LevelController::class, 'index']);
// Route::get('/delete-level', [LevelController::class, 'index']);
// Route::get('/data-level', [LevelController::class, 'index']);
Route::get('/data-kategori', [KategoriController::class, 'index']);







