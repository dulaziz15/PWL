<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('product')->group(function() {
    Route::get('/category/food-beverage', [ProductController::class, 'food_beverage']);
    Route::get('/category/beauty-health', [ProductController::class, 'beauty_health']);
    Route::get('/category/home-care', [ProductController::class, 'home_care']);
    Route::get('/category/baby-kid', [ProductController::class, 'baby_kid']);
});

Route::get('user/{id}/name/{name}', [UserController::class, 'index']);

Route::get('penjualan', [PenjualanController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);