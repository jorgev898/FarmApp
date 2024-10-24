<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductssController;

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

Route::get('/', HomeController::class );

Route::prefix('/auth')->controller(AuthController::class)->group(function(){
    Route::get('/register', 'register');
    Route::get('/login', 'login');
});

Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('show', 'product');
});