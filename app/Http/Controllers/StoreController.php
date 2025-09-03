<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function products() {
    $products = [
        ['name' => 'Product 1', 'price' => 100, 'sale' => true],
        ['name' => 'Product 2', 'price' => 200, 'sale' => false],
    ];
    return view('shop.products', compact('products'));
}

public function about() {
    $title = "عن متجرنا";
    $description = "أفضل متجر إلكتروني للتجربة.";
    $rawHtml = "<strong>عرض خاص!</strong>";
    return view('shop.about', compact('title', 'description', 'rawHtml'));
}

}
