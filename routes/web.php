<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'index')->name('home');
});


Route::get('/anggota', [RegisteredUserController::class, 'index']);
Route::get('/anggota/{user:instagram}', [RegisteredUserController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // article page
    Route::controller(ArticlesController::class)->group(function () {
        Route::get('/articles', 'index')->name('articles.index');
        Route::get('/articles/create', 'create')->name('articles.create');
        Route::post('/articles', 'store')->name('articles.store');
        Route::get('/articles/{article:slug}', 'show')->name('articles.show');
        Route::delete('/articles/{article:slug}', 'destroy')->name('articles.destroy');
        Route::get('/articles/{article:slug}/edit', 'edit')->name('articles.edit');
        Route::put('/articles/{article:slug}', 'update')->name('articles.update');
    });
});

require __DIR__ . '/auth.php';
