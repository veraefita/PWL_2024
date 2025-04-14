<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use Database\Seeders\KategoriSeeder;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





// Route::get('/update-level', [LevelController::class, 'index']);
// Route::get('/delete-level', [LevelController::class, 'index']);
// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);


Route::get('/data-user', [UserController::class, 'index']);








