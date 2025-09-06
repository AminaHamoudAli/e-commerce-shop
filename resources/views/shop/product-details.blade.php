@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div id="fh5co-product-detail">
    <div class="container">

        {{-- رسائل النجاح أو الخطأ --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- عنوان المنتج --}}
        <div class="row animate-box text-center">
            <div class="col-md-8 col-md-offset-2 fh5co-heading">
                <h2>{{ $product->name }}</h2>
                <p>تفاصيل المنتج</p>
            </div>
        </div>

        <div class="row">
            {{-- صورة المنتج --}}
            <div class="col-md-6 text-center animate-box">
                <div class="product-grid" style="background-image:url({{ $product->image ? asset('storage/'.$product->image) : asset('images/default-product.jpg') }}); height:400px; background-size:cover; background-position:center;">
                    <div class="inner">
                        <p>
                            <a href="#" class="icon"><i class="icon-shopping-cart"></i></a>
                        </p>
                    </div>
                </div>
            </div>

            {{-- تفاصيل المنتج --}}
            <div class="col-md-6 animate-box">
                <div class="desc" style="padding:20px;">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p><strong>السعر: </strong> ${{ number_format($product->price, 2) }}</p>
                    <p><strong>على العرض: </strong> 
                        @if($product->on_sale)
                            <span style="color:green; font-weight:600;">نعم</span>
                        @else
                            <span style="color:red;">لا</span>
                        @endif
                    </p>

                    {{-- نموذج لإضافة المنتج للسلة --}}
                    <form action="{{ url('/cart/add/'.$product->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="icon-shopping-cart"></i> أضف للسلة
                                </button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/products') }}" class="btn btn-default btn-block">العودة للمنتجات</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
