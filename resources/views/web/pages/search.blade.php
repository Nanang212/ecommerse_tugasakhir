@extends('layouts.web')

<?php $seo = DB::table('seo')->where('id_seo', '1')->first(); ?>
@section('title')
  {{ $seo->title ? $seo->title : 'Store 1' }}
@endsection

@section('description')
  {{ $seo->deskripsi ? $seo->deskripsi : 'Store 1' }}
@endsection

@section('keyword')
  {{ $seo->keyword ? $seo->keyword : 'Store 1' }}
@endsection

@section('content')
  <!-- konten -->
  <!-- Preloader Start -->
  <div class="zakas-preloader active">
    <div class="zakas-preloader-inner h-100 d-flex align-items-center justify-content-center">
      <div class="zakas-child zakas-bounce1"></div>
      <div class="zakas-child zakas-bounce2"></div>
      <div class="zakas-child zuka-bounce3"></div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Main Wrapper Start -->
  <div class="wrapper">
    <!-- Header Start -->
    @include('web.components.header')
    <!-- Header End -->

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
              <h1 class="page-title">Keyword : {{ $keyword }}</h1>
              <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="current"><span>Search</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div  class="main-content-wrapper">
      <div class="shop-page-wrapper shop-fullwidth ptb--80">

        <div class="container-fluid shop-products">
          <div class="row">
            <div class="col-12">
              <div class="tab-content" id="product-tab-content">
                <div class="tab-pane fade show active">
                  <div class="row xxl-block-grid-6 grid-space-20">
                    @csrf
                    <?php if($ceksearch){ ?>
                      @foreach ($search as $result)
                      <?php
                      $kategori = $result->kategoriproduk_id;
                      $product = DB::table('kategoriproduk')->where('id', $kategori)->first();
                      $namaKategori = $product->nama;
                      $slug = $product->slug;
                      ?>
                      <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                        <div class="zakas-product">
                          <div class="product-inner">
                            <figure class="product-image">
                              <a href="{{ $result->slug }}">
                                <img src="{{asset('assets/product/'.$result->gambar1)}}" alt="Products">
                              </a>
                              {{-- <span class="product-badge">New</span> --}}
                            </figure>
                            <div class="product-info">
                              <h3 class="product-title mb--15">
                                <a href="{{ $result->slug }}">{{ $result->nama }}</a>
                              </h3>
                              <div class="product-price-wrapper mb--30">
                                <span class="money">Rp {{ number_format($result->harga) }}</span>
                              </div>
                              <div class="zakas-product-action-list d-flex">
                              <a href="{{ $result->slug }}" class="btn btn-small btn-bg-sand btn-color-dark" style="margin-right:5px;">Detail Product</a>
                              <?php
                                $email = Session::get('email');
                                if($email){
                              ?>
                              <a href="javascript:;" id="keranjang1{{ $result->id }}" class="btn btn-small btn-bg-sand btn-color-dark">Add to cart</a>
                              <?php
                                }else{
                                  $segmen = Request::segment(1);
                                  if($segmen){
                                  ?>
                                  <a href="/loginsegmen/{{ Request::segment(1) }}" class="btn btn-small btn-bg-sand btn-color-dark">Add to cart</a>
                                  <?php }else{ ?>
                                    <a href="/login" class="btn btn-small btn-bg-sand btn-color-dark">Add to cart</a>
                                  <?php } ?>
                              <?php } ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    <?php }else{ echo "Data tidak ditemukan";} ?>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Content Wrapper End -->

    <!-- Footer Start-->
    @include('web.components.footer')
    <!-- Footer End-->

    <!-- Searchform Popup Start -->
    <div class="searchform__popup" id="searchForm">
      <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
      <div class="searchform__body">
        <p>Start typing and press Enter to search</p>
        <form class="searchform">
          <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
          <button type="submit" class="searchform__submit"><i class="flaticon flaticon-magnifying-glass-icon"></i></button>
        </form>
      </div>
    </div>
    <!-- Searchform Popup End -->

    <!-- Mini Cart Start -->
    @include('web.components.minicart')
    <!-- Mini Cart End -->

    <!-- Global Overlay Start -->
    <div class="zakas-global-overlay"></div>
    <!-- Global Overlay End -->
  </div>
  <!-- Main Wrapper End -->
  <!-- konten -->
@endsection
