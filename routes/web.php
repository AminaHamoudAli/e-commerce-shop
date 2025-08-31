<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ShopController::class, 'index']);
