@extends('layouts.app')

@section('title', 'تعديل المنتج')

@section('content')
<div class="container">
    <h1>تعديل المنتج</h1>

    <form action="{{ url('/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') {{-- مهم جداً عشان Laravel يعرف أن هذا تحديث --}}

        <div class="form-group">
            <label>الاسم:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="form-group">
            <label>الوصف:</label>
            <textarea name="description" class="form-control" required>{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label>السعر:</label>
            <input type="number" name="price" class="form-control" step="0.01" value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="form-group">
            <label>الحالة (On Sale):</label>
            <input type="checkbox" name="on_sale" value="1" {{ $product->on_sale ? 'checked' : '' }}>
        </div>

        <div class="form-group">
            <label>الصورة (اختياري):</label>
            <input type="file" name="image" class="form-control">
            @if($product->image)
                <p>الصورة الحالية:</p>
                <img src="{{ asset('storage/'.$product->image) }}" width="120">
            @endif
        </div>

        <button type="submit" class="btn btn-success">حفظ التعديلات</button>
    </form>
</div>
@endsection
