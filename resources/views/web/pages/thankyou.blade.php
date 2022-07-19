@extends('layouts.web')

@section('content')
<!-- konten -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- konten -->
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Checkout Berhasil</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">Checkout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Blog Section Start -->
    <div class="blog-section section section-padding">
        <div class="container">

    <div style="text-align: center;">
      <h2>Mohon Segera Selesaikan Pembayaran</h2><br>
      <h2>Jumlah yang harus dibayar</h2>
    </div>

<hr>

<div class="table-area">
<div class="table-responsive">
  <table class="table table-bordered text-center">
    <thead>
      <tr class="c-head">
        <th style="border:1px solid #dee2e6;">Gambar</th>
        <th style="border:1px solid #dee2e6;">Produk</th>
        <th style="border:1px solid #dee2e6;">Harga</th>
        <th style="border:1px solid #dee2e6;">Jumlah</th>
        <!--<th>Berat</th>-->
        <th style="border:1px solid #dee2e6;">Subtotal</th>
      </tr>
    </thead>
    @foreach ($keranjang as $result)
      <?php
        $kode_produk = $result->kode_produk;
        $product = DB::table('produk')->where('kode_produk', $kode_produk)->first();
        $kode_produk = $product->kode_produk;
        $nama = $product->nama;
        $harga = $product->harga;
        $berat = $product->berat;
        $gambar1 = $product->gambar1;
       ?>
    <tr>
      <td style="border:1px solid #dee2e6;">
        <img style="width:100px;" src="{{asset('assets/product/'.$gambar1)}}" alt="" />
      </td>
      <td style="border:1px solid #dee2e6;">
          {{ $nama }}
        </td>
        <td style="border:1px solid #dee2e6;">
          <p>Rp {{ number_format($harga) }}</p>
        </td>
        <td style="border:1px solid #dee2e6;"><span>{{ $result->jumlah }}</span></td>
        <td style="border:1px solid #dee2e6;">Rp {{ number_format($result->total) }}</td>
      </tr>
    @endforeach
      <tr>
        <td colspan="4" align="right" style="border:1px solid #dee2e6; padding-right:10px;">
          Subtotal
        </td>
        <td style="border:1px solid #dee2e6;">Rp {{ number_format($datapemesanan->subtotal) }}</td>
        </tr>
        <tr>
          <td colspan="4" align="right" style="border:1px solid #dee2e6; padding-right:10px;">
            Pengiriman ({{ strtoupper($datapemesanan->provider_ongkir) }} - {{ strtoupper($datapemesanan->service_ongkir) }})
          </td>
          <td style="border:1px solid #dee2e6;">
            Rp {{ number_format($datapemesanan->cost_ongkir) }}
          </td>
        </tr>
          <tr>
            <td colspan="4" align="right" style="border:1px solid #dee2e6; padding-right:10px;">
              Grand Total
            </td>
            <td style="border:1px solid #dee2e6;">
              Rp {{ number_format($datapemesanan->grandtotal) }}
            </td>
          </tr>
      </table>

    </div>
  </div>

      <hr>
      <div class="short-description" style="text-align: center; margin-top:20px;">
        <img style="width:100px;" src="{{asset('assets/bank/'.$databank->gambar)}}">
      </div>
      <br>
      <div class="short-description" style="text-align: center; margin-bottom:20px;">
        <h2>{{ $datarekening->rekening }}</h2><br>
        <h2>a/n {{ $datarekening->atasnama }}</h2>
      </div>
      <hr>
      <div class="add-to-box" style="text-align: center; margin-top:20px;">
        <div class="add-to-cart">
          <button onclick="location.href='/member/paymentstatus'" style="float: none; padding: 10px; margin:0px;background-color: #1c95d1; color: white; font-weight: normal; cursor: pointer;" class="button" title="Cek Status Pemesanan" type="button"><span style="font-size: 20px;">Cek Status Pembayaran</span></button>
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
