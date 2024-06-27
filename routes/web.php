<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;

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

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::post('/comment/{postId}', [HomeController::class, 'getComment']);
    Route::get('/upload', [HomeController::class, 'upload']);
    Route::post('/upload', [HomeController::class, 'picturePost']);
    Route::delete('/post/{postId}', [HomeController::class, 'deletePost'])->name('post.delete');
});

Route::get("/", [LoginController::class, "index"])->name('login');
Route::post("/", [LoginController::class, "login"]);
Route::get('/signup', [SignController::class, 'index']);
Route::post('/signup', [SignController::class, 'sign']);
