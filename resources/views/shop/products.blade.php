@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box text-center">
            <div class="col-md-8 col-md-offset-2 fh5co-heading">
                <span>Cool Stuff</span>
                <h2>Products</h2>
                <p>استعرض كل المنتجات المتاحة لدينا.</p>
            </div>
        </div>
        
        <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 text-center animate-box">
                    <div class="product">
                        <div class="product-grid" style="background-image:url({{ $product->image ? asset('storage/'.$product->image) : asset('images/default-product.jpg') }});">
                            <div class="inner">
                                <p>
                                    <a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
                                    <a href="{{ url('/products/'.$product->id) }}" class="icon"><i class="icon-eye"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a></h3>
                            <span class="price">${{ number_format($product->price, 2) }}</span>
                            @if($product->on_sale)
                                <span style="color:green; font-weight:600;">(On Sale)</span>
                            @endif

                            {{-- زر تعديل المنتج --}}
                            <div style="margin-top:10px;">
                                <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-primary btn-sm">تعديل</a>
                            </div>
                             <form action="{{ url('/products/'.$product->id) }}" method="POST" style="display:inline;">
       
                             @csrf
       
                             @method('DELETE')
       
                             <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من الحذف؟');">حذف</button>
  
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>لا توجد منتجات حالياً.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
