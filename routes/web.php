<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProdactController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\contactController;



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [ShopController::class, 'index']);

Route::get('/pages/about', [HomeController::class, 'index']);


// Route::get('/pages/services', [ServicesController::class, 'index']);

Route::get('/pages/prodact', [ProdactController::class, 'index']);

Route::get('/', [contactController::class, 'index'])->name('about');
// Route::get('/pages/contact', [contactController::class, 'index']);

Route::get('/pages/single', [ProdactController::class, 'single'])->name('single.blade');
