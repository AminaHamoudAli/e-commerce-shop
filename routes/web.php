<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdactController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductsController;

// use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProdactsController;
use App\Http\Controllers\ServicesController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/pages/about', [HomeController::class, 'index']);



Route::get('/pages/prodact', [ProdactController::class, 'index']);

Route::get('/', [contactController::class, 'index'])->name('about');


// Route::get('/pages/single', [contactController::class, 'single'])->name('single.blade');
Route::get('/pages/single', [ProdactController::class, 'single'])->name('single.blade');

// Route::get('/', [ShopController::class, 'index']);


Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products');
