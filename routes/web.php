<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\profileController;



Route::middleware(['auth'])->group(function () {
    Route::get('/home/{id}', [HomeController::class, 'index'])->name('home');
    Route::post('/comment/{postId}/{id}', [HomeController::class, 'getComment']);
    Route::get('/upload/{id}', [HomeController::class, 'upload']);
    Route::post('/upload/{id}', [HomeController::class, 'picturePost']);
    Route::get('/like/{postId}/{id}', [HomeController::class, 'likePost']);
    Route::get('/logout', [logoutController::class, 'logout']);
    Route::get('/deletepost/{postId}/{user_id}', [HomeController::class, 'deletePost'])->name('post.delete');
    Route::get('/profile/{id}', [profileController::class, 'index'])->name('profile');
    Route::get('/Del/{id}', [profileController::class, 'delete']);
    Route::get('/edit/{id}', [profileController::class, 'edit']);
    Route::post('/change-photo/{id}', [ProfileController::class, 'changePhoto'])->name('change.photo');
    Route::post('/edit/{id}', [profileController::class, 'update']);
});

Route::get("/", [LoginController::class, "index"])->name('login');
Route::post("/", [LoginController::class, "login"]);
Route::get('/signup', [SignController::class, 'index']);
Route::post('/signup', [SignController::class, 'sign']);

