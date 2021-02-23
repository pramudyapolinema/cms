<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
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

// Auth::routes();

// 1. Menampilkan Halaman Awal Website
Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Menampilkan Daftar Produk (Route Prefix)
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});

// 3. Menampilkan Daftar Berita (Route Param)
Route::get('/news', [ArticleController::class, 'news']);
Route::get('/news/{string}', [ArticleController::class, 'newsString']);

// 4. Menampilkan Daftar Program (Route Prefix)
Route::prefix('/program')->group(function () {
    Route::get('/{string}', function ($string) {
        return view('program', ['url' => $string]);
    });
});

// 5. About Us
Route::get('/about-us', [AboutController::class, 'about']);

// 6. Contact Us
Route::get('/contact-us', [ContactController::class, 'index']);

