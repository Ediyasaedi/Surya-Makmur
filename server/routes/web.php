<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

// Route::get('/product', [ProductsController::class, 'index']);
// Route::get('/product/create', [ProductsController::class, 'create']);
// Route::get('/product/{product}', [ProductsController::class, 'show']);
// Route::post('/product', [ProductsController::class, 'store']);
// Route::delete('/product/{product}', [ProductsController::class, 'destroy']);
// Route::get('/product/{product}/edit', [ProductsController::class, 'edit']);
// Route::patch('/product/{product}', [ProductsController::class, 'update']);

Route::resource('product', ProductsController::class);
