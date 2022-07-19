@extends('layouts.web')

@section('content')
<!-- konten -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- pagination -->
    <style type="text/css">
    .holder {
      margin: 15px 0;
    }
    .holder a {
      font-size: 12px;
      cursor: pointer;
      margin: 0 5px;
      color: #0088cc;
      background-color: white;
      border:solid 1px #dddddd;
      padding: 10px;
    }
    .holder a:hover {
      background-color: #dddddd;
      color: black;
      text-decoration: none;
    }
    .holder a.jp-current, a.jp-current:hover {
      color: #0088cc;
      font-weight: bold;
      cursor: default;
      background: white;
    }
    .holder span { margin: 0 5px; }
    .customBtns { position: relative; }
    .arrowPrev, .arrowNext { width:29px; height:29px; position: absolute; top: 55px; cursor: pointer; }
    .arrowPrev { background-image: url('img/back.gif'); left: -45px; }
    .arrowNext { background-image: url('img/next.gif'); right: -40px; }
    .arrowPrev.jp-disabled, .arrowNext.jp-disabled { display: none; }
    </style>
    <!-- pagination -->

    <!-- konten -->
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(./web/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Our Product</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="javascript:;">Our Product</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">

            <div class="row" id="itemContainer">
              @foreach ($product as $result)
              <?php
                $kategori = $result->kategoriproduk_id;
                $product = DB::table('kategoriproduk')->where('id', $kategori)->first();
                $namaKategori = $product->nama;
                $slug = $product->slug;
              ?>
              <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                <div class="product-item">
                  <div class="product-inner">

                    <div class="image">
                      <img src="{{asset('assets/product/'.$result->gambar1)}}" alt="">

                      <div class="image-overlay">
                        <div class="action-buttons">
                          <button onclick="location.href='{{ $result->slug }}'">Detail</button>
                          {{-- <button>add to wishlist</button> --}}
                        </div>
                      </div>

                    </div>

                    <div class="content">

                      <div class="content-left" style="flex: 0 0 calc(100%); text-align: center;">

                        <h4 class="title"><a href="{{ $result->slug }}">{{ $result->nama }}</a></h4>

                        <div>
                          <span class="price" style="color: #ff708a; font-weight: 600; font-size:24px;">Rp {{ number_format($result->harga) }}</span>
                        </div>

                        <h5 class="size">&nbsp;</h5>
                        <h5 class="color">&nbsp;</h5>

                      </div>

                    </div>

                  </div>
                </div>

              </div>
              @endforeach

            </div>
            
            <div class="col-12" style="display: block !important;">
                <div class="holder" style="text-align: center;"></div>
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
