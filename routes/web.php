<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController2;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// praktikum 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
// echo "1941720204-Moch Farchan Agil";   
// });

// Route::get('/articles/{id}', function ($id) {
// return 'Halaman Artikel dengan ID>' .$id;   
// });

// Praktikum 2
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about'] );

// Route::get('/articles/{id}', [PageController::class, 'articles']);

//Praktikum 2 no 3
// Route::get('/', [HomeController::class, 'welcome']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Praktikum 3
Route::get('/', [PageController2::class, 'Index']);
Route::prefix('/Product')->group(function () {
    Route::get('/', [PageController2::class, 'Product']);
    Route::get('/EduGames', [PageController2::class, 'EduGames']);
    Route::get('/KidGames', [PageController2::class, 'KidGames']);
    Route::get('/StoryBooks', [PageController2::class, 'StoryBooks']);
    Route::get('/KidSongs', [PageController2::class, 'KidSongs']);    
});
Route::get('/News/{id}', [PageController2::class, 'News']);
Route::prefix('/Program')->group(function () {
    Route::get('/', [PageController2::class, 'Program']);
    Route::get('/Karir', [PageController2::class, 'Karir']);
    Route::get('/magang', [PageController2::class, 'magang']);
    Route::get('/Kunjungan', [PageController2::class, 'Kunjungan']);    
});
Route::get('/AboutUs', [PageController2::class, 'AboutUs']);
Route::resource('Contact', ContactController::class)->only ([
    "index"
]);