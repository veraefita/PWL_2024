<?php


use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





// Route::get('/update-level', [LevelController::class, 'index']);
// Route::get('/delete-level', [LevelController::class, 'index']);
Route::get('/data-level', [LevelController::class, 'index']);



