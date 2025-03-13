<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

// routepertama
Route::get('/hello', function () { 
    return 'Hello World'; 
   });

// routekedua
Route::get('/world', function () { 
    return 'World'; 
   });

// routeketiga
Route::get('/selamatdatang', function () { 
    return 'Selamat Datang'; 
   });
   
// routekeempat
   Route::get('/about', function () { 
    return 'Nim :2341760047 Nama: Vera Efita Hudi Putri'; 
   });

// routekelima
Route::get('/user/{name}', function ($name) { return 'NAMA '.$name; 
});

// routekeenam
Route::get('/posts/{post}/comments/{comment}', function  ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; });
   
// routeketujuh
Route::get('/articles/{id}', function ($id) { 
    return "Halaman Artikel dengan ID ".$id; 
});

// routekedelapan
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });

//routesembilan
Route::get('/user/{name?}', function ($name='Veraa') {
    return 'Nama saya '.$name;
    });
    
//prak 2 nomor 1
Route::get('/hello', [WelcomeController::class,'hello']);

//nomor2
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);


Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'VERA']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);

Route::get('/', [HomeController::class,'index'])->name('home');

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index' ])->name('product.index');
    Route::get('/category/food-beverage', [ProductController :: class, 'foodBeverage'])->name('product.food-beverage');
    Route::get('/category/beauty-health', [ProductController :: class, 'beautyHealth' ])->name('product.beauty-health');
    Route::get('/category/home-care', [ProductController::class, 'homeCare' ])->name('product.home-care');
    Route::get('/category/baby-kid', [ProductController :: class, 'babyKid' ])->name('product.baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class,'index'])->name('home');

Route::get('/sales', [SalesController::class,'index'])->name('sales.index');


















/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
