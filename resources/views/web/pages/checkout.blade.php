@extends('layouts.web')

@section('content')
<!-- konten -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- konten -->
    <!-- spinner -->
        <style type="text/css">
        .loader {
          margin: 20px auto;
          font-size: 7px;
          width: 1em;
          height: 1em;
          border-radius: 50%;
          position: relative;
          text-indent: -9999em;
          -webkit-animation: load5 1.1s infinite ease;
          animation: load5 1.1s infinite ease;
          -webkit-transform: translateZ(0);
          -ms-transform: translateZ(0);
          transform: translateZ(0);
        }
        @-webkit-keyframes load5 {
          0%,
          100% {
            box-shadow: 0em -2.6em 0em 0em #f20707, 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.5), -1.8em -1.8em 0 0em rgba(242,7,7, 0.7);
          }
          12.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.7), 1.8em -1.8em 0 0em #f20707, 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.5);
          }
          25% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.5), 1.8em -1.8em 0 0em rgba(242,7,7, 0.7), 2.5em 0em 0 0em #f20707, 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          37.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.5), 2.5em 0em 0 0em rgba(242,7,7, 0.7), 1.75em 1.75em 0 0em #f20707, 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          50% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.5), 1.75em 1.75em 0 0em rgba(242,7,7, 0.7), 0em 2.5em 0 0em #f20707, -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          62.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.5), 0em 2.5em 0 0em rgba(242,7,7, 0.7), -1.8em 1.8em 0 0em #f20707, -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          75% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.5), -1.8em 1.8em 0 0em rgba(242,7,7, 0.7), -2.6em 0em 0 0em #f20707, -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          87.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.5), -2.6em 0em 0 0em rgba(242,7,7, 0.7), -1.8em -1.8em 0 0em #f20707;
          }
        }
        @keyframes load5 {
          0%,
          100% {
            box-shadow: 0em -2.6em 0em 0em #f20707, 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.5), -1.8em -1.8em 0 0em rgba(242,7,7, 0.7);
          }
          12.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.7), 1.8em -1.8em 0 0em #f20707, 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.5);
          }
          25% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.5), 1.8em -1.8em 0 0em rgba(242,7,7, 0.7), 2.5em 0em 0 0em #f20707, 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          37.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.5), 2.5em 0em 0 0em rgba(242,7,7, 0.7), 1.75em 1.75em 0 0em #f20707, 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          50% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.5), 1.75em 1.75em 0 0em rgba(242,7,7, 0.7), 0em 2.5em 0 0em #f20707, -1.8em 1.8em 0 0em rgba(242,7,7, 0.2), -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          62.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.5), 0em 2.5em 0 0em rgba(242,7,7, 0.7), -1.8em 1.8em 0 0em #f20707, -2.6em 0em 0 0em rgba(242,7,7, 0.2), -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          75% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.5), -1.8em 1.8em 0 0em rgba(242,7,7, 0.7), -2.6em 0em 0 0em #f20707, -1.8em -1.8em 0 0em rgba(242,7,7, 0.2);
          }
          87.5% {
            box-shadow: 0em -2.6em 0em 0em rgba(242,7,7, 0.2), 1.8em -1.8em 0 0em rgba(242,7,7, 0.2), 2.5em 0em 0 0em rgba(242,7,7, 0.2), 1.75em 1.75em 0 0em rgba(242,7,7, 0.2), 0em 2.5em 0 0em rgba(242,7,7, 0.2), -1.8em 1.8em 0 0em rgba(242,7,7, 0.5), -2.6em 0em 0 0em rgba(242,7,7, 0.7), -1.8em -1.8em 0 0em #f20707;
          }
        }
        </style>
    <!-- spinner -->
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Checkout</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">Checkout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">

			<!-- Checkout Form s-->
			<form action="#" class="checkout-form">
			   <div class="row row-50 mbn-40">

				   <div class="col-lg-7">

					   <!-- Billing Address -->
					   <div id="billing-form" class="mb-20">
						   <h4 class="checkout-title">Billing Address</h4>

						   <div class="row">
                 <?php
                  $email = Session::get('email');
                  $detail_member = DB::table('member')->where('email', $email)->first();
                  $get_nama = $detail_member->name;
                  $get_email = $detail_member->email;
                  $get_telepon = $detail_member->telepon;
                 ?>
							   <div class="col-12 mb-5">
								   <label>Nama</label>
								   <input type="text" name="getnama" id="getnama"  value="{{ $get_nama }}" disabled>
							   </div>
                 <div class="col-12 mb-5">
								   <label>Email</label>
								   <input type="text" name="getemail" id="getemail"  value="{{ $get_email }}" disabled>
							   </div>
                 <div class="col-12 mb-5">
								   <label>Telepon</label>
								   <input type="text" name="gettelepon" id="gettelepon" value="{{ $get_telepon }}" disabled>
							   </div>

						   </div>

					   </div>

				   </div>

				   <div class="col-lg-5">
					   <div class="row">

						   <!-- Cart Total -->
						   <div class="col-12 mb-40">

							   <h4 class="checkout-title">Cart Total</h4>

							   <div class="checkout-cart-total">

								   <h4>Product <span>Total</span></h4>

								   <ul>
                     <?php
                        $no_pemesanan = Session::get('no_pemesanan');
                        $keranjang = DB::table('detailpemesanan')->where('no_pemesanan', $no_pemesanan)->get();
                      ?>
                      @foreach ($keranjang as $result)
                      <?php
                        $kode_produk = $result->kode_produk;
                        $product = DB::table('produk')->where('kode_produk', $kode_produk)->first();
                        $kode_produk = $product->kode_produk;
                        $nama = $product->nama;
                        $harga = $product->harga;
                        $berat = $product->berat;
                        $stok = $product->stok;
                        $gambar1 = $product->gambar1;
                      ?>
									   <li>{{ $nama }} X {{ $result->jumlah }} <span>Rp {{ number_format($harga) }}</span></li>
                     @endforeach
								   </ul>
                   <?php
                    $no_pemesanan = Session::get('no_pemesanan');
                    $get_pemesanan = DB::table('pemesanan')->where('no_pemesanan', $no_pemesanan)->first();
                    $get_subtotal = $get_pemesanan->subtotal;
                    $get_grandtotal = $get_pemesanan->grandtotal;
                   ?>
								   <p>Sub Total <span>Rp {{ number_format($get_subtotal) }}</span></p>
								   <!-- alamat -->
                   <!-- payment-method -->
                                                    <div class="payment-method">
                                                      <?php
                                                      $email = Session::get('email');
                                                      $detail_member = DB::table('member')->where('email', $email)->first();
                                                      $get_nama = $detail_member->name;
                                                      $get_email = $detail_member->email;
                                                      $get_telepon = $detail_member->telepon;
                                                      ?>
                                                      <form role="form" method="post" id="paymentform">
                                                        @csrf
                                                        <input type="text" name="namapen" id="namapen" value="{{ $get_nama }}" class="input-text validate-postcode" style="display:none;" hidden>
                                                        <input type="text" name="emailpen" id="emailpen" value="{{ $get_email }}" class="input-text validate-postcode" style="display:none;" hidden>
                                                        <input type="text" name="teleponpen" id="teleponpen" value="{{ $get_telepon }}" class="input-text validate-postcode" style="display:none;" hidden>
                                                        <input type="text" name="banktujuan" id="banktujuan" class="input-text validate-postcode" style="display:none;" hidden>

                                                        <h6 class="widget-title border-left mb-20">Alamat Utama</h6>
                                                        <?php
                                      $email = Session::get('email');
                                      $detail_member = DB::table('member')->where('email', $email)->first();
                                      $kode_member = $detail_member->kode_member;
                                      $defalamat = DB::table('alamat')->where('kode_member', $kode_member)->orderBy('id_alamat', 'asc')->first();
                                      $id_alamat = $defalamat->id_alamat;
                                      ?>

                  <select name="alamatalternatif" id="alamatalternatif" class="form-control" style="font-size:15px; height:100%;">
                    <option value="0">Pilih Alamat Pengiriman</option>
                    <?php
                    $data_alamat = DB::table('alamat')->where('kode_member', $kode_member)->get();
                    ?>
                    @foreach ($data_alamat as $result)
                      <option value="{{ $result->id_alamat }}"
                        @if ($id_alamat == $result->id_alamat) selected @endif >{{ $result->nama_alamat }}</option>
                        @endforeach
                      </select>
                      <br>
                      <div id="row_alamat"></div>


                      <small># Alamat ini yang akan dipakai untuk pengiriman, jika akan menggunakan alamat lain silahkan ganti alamat</small>

                      <br>
                      <a href="/alamat" target="_blank" class="btn btn-primary">Ganti Alamat</a>
                      <br>
                      <!-- script -->
                      <script type="text/javascript">
                      $(document).ready(function() {

                        //$("#spinner").hide();
                        //$("#alamatalternatif").change(function(){
                        var alamatalternatif = $("#alamatalternatif").val();
                        //alert(alamatalternatif);
                        if(alamatalternatif=='0'){ $("#row_alamat").hide(); }else{

                          $.ajax({
                            type: "GET",
                            url : "/getalamat/"+alamatalternatif,
                            beforeSend: function() {
                              $("#row_alamat").hide();
                              $("#spinner").show();
                            },
                            success: function(data){
                              $("#spinner").hide();
                              $("#row_alamat").show();
                              $('#row_alamat').html(data.html);
                            }
                          });

                        }

                        //});

                        $("#alamatalternatif").change(function(){
                          var alamatalternatif = $("#alamatalternatif").val();
                          //alert('blog');
                          if(alamatalternatif=='0'){ $("#row_alamat").hide(); }else{

                            $.ajax({
                              type: "GET",
                              url : "/getalamat/"+alamatalternatif,
                              beforeSend: function() {
                                $("#row_alamat").hide();
                                $("#spinner").show();
                              },
                              success: function(data){
                                $("#spinner").hide();
                                $("#row_alamat").show();
                                $('#row_alamat').html(data.html);
                              }
                            });

                          }

                          getShipping();

                        });

                      });
                      </script>
                      <!-- script -->
                      <br>
                   <!-- alamat -->

                   <!-- shipping -->
                   <h6 class="widget-title border-left mb-20">Pilih Pengiriman</h6>
                      <div>
                        <div id="jenis_kurir2">
                          <select name="jenis_kurir" id="jenis_kurir" class="form-control" style="font-size:15px; height:100%;">
                          <option value='0'>-- Pilih Pengiriman --</option>
                        </select>
                      </div>
                      <div class="loader" id="spinner2">Loading...</div>
                    </div>

                    <!-- script -->
                    <script type="text/javascript">
                    function addCommas(nStr) {
                      nStr += '';
                      x = nStr.split('.');
                      x1 = x[0];
                      x2 = x.length > 1 ? '.' + x[1] : '';
                      var rgx = /(\d+)(\d{3})/;
                      while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + '.' + '$2');
                      }
                      return x1 + x2;
                    }

                    function getShipping() {
                      $(document).ready(function() {
                        <?php
                        $profiltoko = DB::table('profiltoko')->where('id_profiltoko', '1')->first();
                        $origin = $profiltoko->kota;

                        $no_pemesanan = Session::get('no_pemesanan');
                        $sumberat = DB::table("detailpemesanan")->where('no_pemesanan', $no_pemesanan)->get()->sum('berat');

                        ?>

                        var origin = '<?php echo $origin;?>';
                        var idalamat = $("#alamatalternatif").val();
                        //var weight = '0';
                        var weight = '<?php echo $sumberat;?>';
                        //alert(destination);
                        var jne = "jne";
                        var tiki = "tiki";
                        var pos = "pos";
                        var jnt = "jnt";

                        $.ajax({
                          type: "GET",
                          url : "/shipping/"+origin+"/"+idalamat,
                          beforeSend: function() {
                            $("#jenis_kurir").hide();
                            $("#spinner2").show();
                          },
                          success: function(data){
                            $("#spinner2").hide();
                            //$(".nice-select").hide();
                            $("#jenis_kurir").show();
                            $('#jenis_kurir').html(data.html);
                          }
                        });
                      });

                      var biaya = 0;
                      //alert(url);
                      //var kurir_lain = $("#kurir_lain").val();
                      <?php
                      $no_pemesanan = Session::get('no_pemesanan');
                      $pemesanan = DB::table('pemesanan')->where('no_pemesanan', $no_pemesanan)->first();
                      $subtotal = $pemesanan->subtotal;
                      ?>
                      var total2 = '{{ $subtotal }}';
                      var jumlah2 = parseInt(biaya)+parseInt(total2);
                      var total_semua = jumlah2;

                      $("#biayacost").html("Rp "+addCommas(biaya));
                      $("#grand_total").html("Rp "+addCommas(total_semua));
                      $("#grand_total2").val(total_semua);

                    }
                    $(document).ready(function() {

                      getShipping();

                      $("#jenis_kurir").change(function(){
                        //alert('test');
                        var nilai=$(this).find('option:selected').val();
                        //alert(nilai);

                        var promo = $("#pot_promo").val();
                        var propinsi = $("#data_propinsi").val();
                        var kota = $("#data_kota").val();
                        var kurir2 = $("#jenis_kurir").val();
                        var url = nilai;
                        var explode = url.split('-');
                        var kurir = explode[0];
                        var paket = explode[1];
                        var biaya = explode[2];
                        //alert(url);
                        //var kurir_lain = $("#kurir_lain").val();
                        <?php
                        $no_pemesanan = Session::get('no_pemesanan');
                        $pemesanan = DB::table('pemesanan')->where('no_pemesanan', $no_pemesanan)->first();
                        $subtotal = $pemesanan->subtotal;
                        ?>
                        var total2 = '{{ $subtotal }}';
                        var jumlah2 = parseInt(biaya)+parseInt(total2);
                        var total_semua = jumlah2;

                        $("#biayacost").html("Rp "+addCommas(biaya));
                        $("#grand_total").html("Rp "+addCommas(total_semua));
                        $("#grand_total2").val(total_semua);

                        // }else{

                        //     $("#grand_total").val("Rp"+addCommas(total2));

                        // }

                      });

                    });
                    </script>
                    <!-- script -->

                    <br>
                   <!-- shipping -->

                   <!-- submit -->
                   <table class="table text-right">
                      <?php
                      $no_pemesanan = Session::get('no_pemesanan');
                      $pemesanan = DB::table('pemesanan')->where('no_pemesanan', $no_pemesanan)->first();
                      ?>
                      <tr>
                        <td>Sub Total</td>
                        <td>Rp {{ number_format($pemesanan->subtotal) }}</td>
                      </tr>
                      <tr>
                        <td>Pengiriman</td>
                        <td id="biayacost">Rp {{ number_format($pemesanan->cost_ongkir) }}</td>
                      </tr>
                      <tr>
                        <td>Grand Total</td>
                        <td id="grand_total">Rp {{ number_format($pemesanan->subtotal) }}</td>
                      </tr>
                    </table>

                    <input type="text" name="grand_total2" id="grand_total2" style="display:none;" hidden/>
                    {{-- <a href="javascript:;" type="button" id="modalpembayaran" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Pembayaran</a> --}}
                    <button class="btn btn-primary" type="button" id="modalpembayaran">Lanjutkan Pembayaran</button>

                    </form>
                   <!-- submit -->


							   </div>

						   </div>

					   </div>
				   </div>

			   </div>
			</form>

        </div>
    </div><!-- Page Section End -->

    <script type="text/javascript">
        $(document).ready(function() {

          $("#modalpembayaran").click(function(){

            var alamatalternatif = $("#alamatalternatif").val();
            var jenis_kurir = $("#jenis_kurir").val();

            if(alamatalternatif==0){
              alert('Maaf, Alamat pengiriman tidak boleh kosong');
              $("#alamatalternatif").focus();
              return false();
            }

            if(jenis_kurir==0){
              alert('Maaf, Pengiriman tidak boleh kosong');
              $("#jenis_kurir").focus();
              return false();
            }

            $('#pilihpembayaran').modal('show');

          });
        });
        </script>
        <!-- modal payment 2 -->

        <div class="modal fade" id="pilihpembayaran" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Pilih Pembayaran</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <!--<button class="btn" data-toggle="modal" data-target="#myModal3" id="modal3">Modal 3</button>-->
                <ul class="list-group">
                  <li class="list-group-item" style="background-color:#eae8e8;">Transfer Bank</li>
                  <?php
                  $databank  = DB::table('rekening')
                  ->join('bank', 'rekening.bank', '=', 'bank.id_bank')
                  ->select('rekening.id_rekening','bank.id_bank', 'bank.gambar')
                  ->get();
                  ?>
                  @foreach ($databank as $i)
                    <li class="list-group-item">
                      <a href="javascript:;" style="display:block;" id="manual{{ $i->id_rekening }}"><img style="max-width:70px; display:inline;" class="img-responsive" src="{{asset('assets/bank/'.$i->gambar)}}"></a>
                    </li>
                  @endforeach
                </ul>
              </div>

              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
        $(document).ready(function() {

          <?php
          $databank  = DB::table('rekening')
          ->join('bank', 'rekening.bank', '=', 'bank.id_bank')
          ->select('rekening.id_rekening','bank.id_bank', 'bank.gambar')
          ->get();
          ?>
          @foreach ($databank as $i)
          $("#rekening{{ $i->id_bank }}").keypress(function(data){
            if (data.which!=8 && data.which!=0 && (data.which<48 || data.which>57))
            {
              return false;
            }
          });

          $("#manual{{ $i->id_rekening }}").click(function(){
            // var bank = $("#namabank").val();
            // var rekening = $("#rekening").val();
            // var nama = $("#nama").val();
            var dataform = $("#paymentform").serialize();
            var token = $("input[name='_token']").val();
            var banktujuan = '{{ $i->id_rekening }}';
            var namapen = $("#namapen").val();
            var emailpen = $("#emailpen").val();
            var teleponpen = $("#teleponpen").val();
            var alamatalternatif = $("#alamatalternatif").val();
            var data_propinsi = $("#data_propinsi").val();
            var data_kota = $("#data_kota").val();
            var jenis_kurir = $("#jenis_kurir").val();
            var url = jenis_kurir;
            var explode = url.split('-');
            var kurir = explode[0];
            var paket = explode[1];
            var biaya = explode[2];
            var promo = $("#promo").val();
            var total = $("#grand_total{{ $i->id_bank }}").val();
            var grandtotal = $("#grand_total").val();
            var grandtotal2 = $("#grand_total2").val();
            // alert(kurir);
            // alert(paket);
            // alert(biaya);
            // alert(total);
            // alert(detailkurir);

            $.ajax({
              type: "POST",
              url : "/payment",
              data: "_token="+token+
              "&namapen="+namapen+
              "&emailpen="+emailpen+
              "&teleponpen="+teleponpen+
              "&banktujuan="+banktujuan+
              "&alamatalternatif="+alamatalternatif+
              "&data_propinsi="+data_propinsi+
              "&data_kota="+data_kota+
              "&jenis_kurir="+jenis_kurir+
              "&grand_total2="+grandtotal2,

              beforeSend: function() {
                // setting a timeout
                $.LoadingOverlay("show");
              },
              success: function(msg){
                //alert(msg);
                document.location.href="/thankyou/"+msg;
              }
            });

          });

          @endforeach

        });
    </script>
    <!-- konten -->

    <!-- Brand Section Start -->
    @include('web.components.brand')

    <!-- Footer Top Section Start -->
    @include('web.components.footer')

</div>
<!-- konten -->
@endsection
