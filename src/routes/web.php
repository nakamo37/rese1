<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LikeController;

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

Route::get('/', [ShopController::class, 'shop']);
Route::get('/done', [UserController::class, 'done']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'create']);
Route::post('/', [ShopController::class, 'search']);
Route::get('/detail', [ShopController::class, 'detail']);
Route::post('/detail', [ContactController::class, 'store']);
Route::get('/mypage', [ContactController::class, 'mypage']);
Route::post('/like/{shopId}', [LikeController::class, 'store']);
Route::post('/unlike/{shopId}', [LikeController::class, 'destroy']);