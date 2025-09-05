<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <title>Stylish Store</title> -->
    <title>@yield('title','my shop')</title>

    <title>Stylish Store</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }} " alt="product-item">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }} " alt="product-item">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }} " alt="product-item">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }} " alt="product-item">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }} " alt="product-item">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }} " alt="product-item">
    <link rel="stylesheet" href="{{ asset('fonts/bootstrap/') }} " alt="product-item">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/') }} " alt="product-item">
    <!-- هنا ممكن تضيف أي ملفات CSS ثانية -->
        <!-- JS -->
        <script src="{{ asset('js.script.js') }}"></script>

        <!-- الصور -->
        <img src="{{ asset('images/card-item1.jpg') }}" alt="product-item">
        <img src="{{ asset('asseat/card-item1.jpg') }}" alt="product-item">

</head>
<body>


    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
