<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'can:access-admin-panel'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/products', function () {
        $products = Product::with('category')->get();
        return view('admin.products', compact('products'));
    });

    Route::get('/categories', function () {
        $categories = Category::with('products')->get();
        return view('admin.categories', compact('categories'));
    });
});



// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     });
//     // باقي الـ routes
// });
