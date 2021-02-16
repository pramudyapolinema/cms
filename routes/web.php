<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

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

// 1. Menampilkan Halaman Awal Website
Route::get('/', [HomeController::class, 'index']);

// 2. Menampilkan Daftar Produk (Route Prefix)
Route::prefix('category')->group(function () {
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
    Route::get('/program/{string}', function ($string) {
        echo "Ini adalah halaman /program/$string <a href='https://www.educastudio.com/program/$string'><button>KLIK!</button></a>";
    });
});

// 5. About Us
Route::get('/about-us', [AboutController::class, 'about']);

// 6. Contact Us
Route::get('/contact-us', function () {
    return redirect("https://www.educastudio.com/contact-us");
});