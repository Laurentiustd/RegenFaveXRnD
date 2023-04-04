<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisteredUserController;
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




Route::get('/changeprofile', function () {
    return view('changeprofile');
});

Route::get('/', [ArticleController::class, 'homeArticle']);


Route::group(['middleware' => ['auth', 'verified']], function (){
    Route::get('/dashboard', [ArticleController::class, 'show'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function (){
    Route::get('/addArticle', [ArticleController::class, 'create']);
    Route::post('/storeArticle', [ArticleController::class, 'store']);
    
    Route::get('/editSelectArticle', [ArticleController::class, 'editSelectArticle']);
    Route::get('/editArticle/{id}', [ArticleController::class, 'edit']);
    Route::patch('/updateArticle/{id}', [ArticleController::class, 'update']);
    
    Route::get('/deleteSelectArticle', [ArticleController::class, 'deleteSelectArticle']);
    Route::delete('/deleteArticle/{id}', [ArticleController::class, 'destroy']);
    // Route::get('/ban', function () {
        //     return view('ban');
        // });
    Route::get('/ban', [ArticleController::class, 'showMember']);
    Route::patch('/banMember/{id}', [ArticleController::class, 'banMember']);
    Route::patch('/unbanMember/{id}', [ArticleController::class, 'unbanMember']);
        
    Route::patch('/updateProfile/{id}', [RegisteredUserController::class, 'update']);
});

require __DIR__.'/auth.php';
