<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProdactController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductsController;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProdactsController;
use App\Http\Controllers\ServicesController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\contactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pages/about', [HomeController::class, 'index']);
 feature/template-integration
// Route::get('/', [ShopController::class, 'index']);

Route::get('/pages/about', [HomeController::class, 'index'])->name('about');


// Route::get('/pages/services', [ServicesController::class, 'index']);


Route::get('/pages/prodact', [ProdactController::class, 'index']);


// Route::get('/pages/single', [contactController::class, 'single'])->name('single.blade');
Route::get('/pages/single', [ProdactController::class, 'single'])->name('single.blade');

// Route::get('/', [ShopController::class, 'index']);


Route::get('/shop/products', [ProductsController::class, 'index'])->name('products');

Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products');

Route::get('/products', [ProductsController::class, 'index']);

// عرض الفورم
Route::get('/shop/products/create', [ProductsController::class, 'create'])->name('create products');

// معالجة الفورم وحفظ المنتج
Route::post('/products', [ProductsController::class, 'store'])->name('create products');

Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('edit products');

Route::put('/products/{id}', [ProductsController::class, 'update'])->name('edit products');

Route::delete('/products/{id}', [ProductsController::class, 'destroy']);


Route::get('/', [contactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact');


Route::get('/contact', function() {
    return view('shop.contact');
});

// Route::get('/pages/contact', [contactController::class, 'index']);

Route::get('/pages/single', [ProdactController::class, 'single'])->name('single.blade');

Route::get('/', [ShopController::class, 'index']);



