@extends('layouts.web')

@section('content')
  <!-- konten -->
  <div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- konten -->
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/blog/single-blog-page-title.jpg)">
      <div class="container">
        <div class="row">
          <div class="page-banner-content col text-center">

            <h1>Registrasi Berhasil</h1>

          </div>
        </div>
      </div>
    </div><!-- Page Banner Section End -->

    <!-- Blog Section Start -->
    <div class="blog-section section section-padding">
      <div class="container">
        <div class="row row-30 mbn-40">

          <div class="col-xl-12 col-lg-12 col-12 order-1 order-lg-2 mb-40">
            <div class="single-blog">

              <div class="content" style="padding-left: 0px; text-align: justify;">

                <div class="desc">
                  <!-- konten -->
                  <div style="text-align: center;">
                    <h2>Silakan periksa email untuk detail registrasi</h2><br>
                    <a href="/login" class="btn btn-primary">Login disini</a>
                  </div>

                  <!-- konten -->
                </div>

              </div>
            </div>

          </div>



        </div>
      </div>
    </div><!-- Blog Section End -->
    <!-- konten -->

    <!-- Brand Section Start -->
    @include('web.components.brand')

    <!-- Footer Top Section Start -->
    @include('web.components.footer')

  </div>
  <!-- konten -->
@endsection
