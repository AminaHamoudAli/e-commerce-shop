@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="container">
    <h2>إضافة منتج جديد</h2>

    {{-- عرض الأخطاء في حالة وجودها --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- الفورم --}}
    <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
    <!-- <form action="{{ url('/../resources/views/pages/product') }}" method="POST" enctype="multipart/form-data"> -->
        

        @csrf

        <div class="form-group">
            <label for="name">اسم المنتج:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">الوصف:</label>
            <textarea class="form-control" name="description" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">السعر:</label>
            <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price') }}" required>
        </div>

        <div class="form-group">
            <label for="on_sale">على العرض؟</label>
            <select class="form-control" name="on_sale">
                <option value="0" {{ old('on_sale') == 0 ? 'selected' : '' }}>لا</option>
                <option value="1" {{ old('on_sale') == 1 ? 'selected' : '' }}>نعم</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image">صورة المنتج:</label>
            <input type="file" class="form-control" name="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">حفظ المنتج</button>
        <a href="{{ url('/products') }}" class="btn btn-secondary">إلغاء</a>
    </form>
</div>
@endsection
