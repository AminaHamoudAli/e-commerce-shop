@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="fh5co-contact-info">
                    <h3>Contact Information</h3>
                    <ul>
                        <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                        <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                        <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6 animate-box">
                <h3>Get In Touch</h3>

                <!-- عرض رسالة النجاح -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- عرض الأخطاء -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/contact') }}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Your Message" required>{{ old('message') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-started">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Newsletter</h2>
                <p>Just stay tuned for our latest products. Now you can subscribe</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-inline">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
