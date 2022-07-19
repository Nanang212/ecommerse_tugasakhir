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
              <h1 class="page-title">Terima kasih</h1>
              <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="current"><span>Terima kasih</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
            <div class="page-content-inner pt--75 pb--80">
                <div class="container">
                    <div>
                      <!-- konten -->
      <div style="text-align: center;">
        <h2>Terima kasih</h2><br>
        <h2>Kami segera akan menghubungi anda</h2>
      </div>
        <!-- konten -->
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
