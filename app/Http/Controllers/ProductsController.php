<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // عرض كل المنتجات
    public function index()
    {
        $products = Product::all();
        return view('shop.products', compact('products'));
    }
    

    // عرض تفاصيل منتج واحد
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.product-details', compact('product'));
    }

    public function create()
{
    return view('shop.create-product');
}

public function store(Request $request)
{
    // التحقق من صحة البيانات
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'on_sale' => 'required|boolean',
        'image' => 'nullable|image|max:2048' // صورة اختيارية
    ]);

    // معالجة رفع الصورة
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('products', 'public');
        $validated['image'] = $path;
    }

    // حفظ المنتج
    Product::create($validated);

    // إعادة التوجيه مع رسالة نجاح
    // return redirect('/products')->with('success', 'تم إضافة المنتج بنجاح!');
    return redirect('/products')->with('success', 'تم إضافة المنتج بنجاح!');

}
public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('shop.edit-product', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    $product->name = $validated['name'];
    $product->description = $validated['description'];
    $product->price = $validated['price'];
    $product->on_sale = $request->has('on_sale');

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('products', 'public');
        $product->image = $path;
    }

    $product->save();

    return redirect('/products')->with('success', 'تم تحديث المنتج بنجاح ✅');
}
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect('/products')->with('success', 'تم حذف المنتج بنجاح');
}


}
