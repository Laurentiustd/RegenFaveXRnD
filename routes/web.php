<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/blog', function () {
    return view('seearticle');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/ban', function () {
    return view('ban');
});

Route::get('/showArticle', [ArticleController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function (){
    Route::get('/addArticle', [ArticleController::class, 'create']);
    Route::post('/storeArticle', [ArticleController::class, 'store']);
    
    Route::get('/editArticle/{id}', [ArticleController::class, 'edit']);
    Route::patch('/updateArticle/{id}', [ArticleController::class, 'update']);

    Route::delete('/deleteArticle/{id}', [ArticleController::class, 'destroy']);
});

require __DIR__.'/auth.php';
