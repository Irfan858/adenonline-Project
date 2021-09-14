<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Login Dan Register Route
Route::post('/login', [UserController::class, 'login']);
Route::post('/register',[UserController::class, 'register']);

//Route Setelah Melakukan Login Ke Akun
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', [UserController::class, 'fetch']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'store']);
});
