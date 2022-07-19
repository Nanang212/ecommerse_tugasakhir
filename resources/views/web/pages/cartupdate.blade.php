<?php
  $no_pemesanan = Session::get('no_pemesanan');
  $jumlahPemesanan  = DB::table('detailpemesanan')->where('no_pemesanan', $no_pemesanan)->count();
  if($jumlahPemesanan){
    $val_jumlah = $jumlahPemesanan;
  }else{
    $val_jumlah = '0';
  }
?>
  <ul class="header-toolbar">
      <li class="header-toolbar__item mini-cart-item">
          <a href="{{route('cart')}}" class="header-toolbar__btn toolbar-btn mini-cart-btn">
              <i class="flaticon flaticon-shopping-cart"></i>
              <sup class="mini-cart-count">{{ $val_jumlah }}</sup>
          </a>
      </li>
      <li class="header-toolbar__item">
          <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
              <i class="flaticon flaticon-search"></i>
          </a>
      </li>
      <li class="header-toolbar__item d-lg-none">
          <a href="#" class="header-toolbar__btn menu-btn">
              <i class="fa fa-bars"></i>
          </a>
      </li>
  </ul>
