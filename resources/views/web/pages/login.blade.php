@extends('layouts.web')

@section('content')
<!-- konten -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- konten -->
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(./web/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Login</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">
            <div class="row mbn-40">

                <div class="col-lg-4 col-12 mb-40">
                    <div class="login-register-form-wrap">
                        <h3>Login</h3>
                        <form action="/memberlogin" method="post" class="mb-30">
                          @csrf
                          <input type="hidden" name="link" class="form_login" value="{{ $link }}">
                            <div class="row">
                                <div class="col-12 mb-15"><input type="text" id="email" name="email" maxlength="90" placeholder="Email"></div>
                                <div class="col-12 mb-15"><input type="password" id="password" name="password" maxlength="90" placeholder="Password"></div>
                                <div class="col-12"><input type="submit" value="Login"></div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- Page Section End -->
    <!-- konten -->

    <!-- Brand Section Start -->
    @include('web.components.brand')

    <!-- Footer Top Section Start -->
    @include('web.components.footer')

</div>
<!-- konten -->
@endsection
