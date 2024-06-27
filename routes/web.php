<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signController;

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


Route::get('/home', [HomeController::class, 'index']);
Route::post('/comment/{postId}', [HomeController::class, 'getComment']);
Route::get('/upload', [HomeController::class, 'upload']);
Route::post('/upload', [HomeController::class, 'picturePost']);
Route::delete('/post/{postId}', [HomeController::class, 'deletePost'])->name('post.delete');

Route::get("/", [LoginController::class,"index"]);
Route::get('/signup',[signController::class,'index']);




