@extends('layouts.web')

@section('content')
<!-- konten -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- konten -->
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url({{asset('web/images/hero/hero-1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Cart</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">Cart</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">
          @csrf
          <?php
            $no_pemesanan = Session::get('no_pemesanan');
            if($no_pemesanan){
          ?>
                <div class="row mbn-40">
                    <div class="col-12 mb-40">
                        <div class="cart-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="{{asset('assets/product/'.$product->gambar1)}}" alt="" /></a></td>
                                        <td class="pro-title"><a href="#">{{ $nama }}</a></td>
                                        <td class="pro-price"><span class="amount">Rp {{ number_format($harga) }}</span></td>
                                        <td class="pro-quantity"><input type="number" value="{{ $result->jumlah }}" class="form-control" name="qty" id="qty_<?php echo $kode_produk; ?>" min="0" max="<?php echo $stok;?>"></td>
                                        <td class="pro-subtotal">Rp {{ number_format($result->total) }}</td>
                                        <td class="pro-remove"><a href="javascript:;" id="deletecart<?php echo $kode_produk;?>">×</a></td>
                                    </tr>
                                  @endforeach
                                  <!-- delete cart -->
                                    <script type="text/javascript" charset="utf-8">
                                    $(document).ready(function() {
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
                                      $("#deletecart<?php echo $kode_produk; ?>").click(function(){

                                        var kode_produk = '<?php echo $kode_produk; ?>';
                                        var no_pemesanan = '<?php echo $no_pemesanan; ?>';
                                        var token = $("input[name='_token']").val();

                                        //alert(kode_produk+' '+no_pemesanan);
                                        $.ajax({
                                                type: "POST",
                                                url : "/deletecart",
                                                data: "_token="+token+
                                                      "&kode_produk="+kode_produk+
                                                      "&no_pemesanan="+no_pemesanan,
                                                beforeSend: function() {
                                                    // setting a timeout
                                                    //$.LoadingOverlay("show");
                                                },
                                                success: function(msg){
                                                  location.reload();
                                                }
                                          });

                                      });
                                    @endforeach

                                    $("#updatecart").click(function(){
                                      @foreach ($keranjang as $result)
                                      <?php
                                          $kode_produk = $result->kode_produk;
                                      ?>
                                        var kode_produk = '<?php echo $kode_produk; ?>';
                                        var qty = $("#qty_<?php echo $kode_produk; ?>").val();
                                        var token = $("input[name='_token']").val();

                                        //alert(kode_produk+' '+qty);
                                        $.ajax({
                                                type: "POST",
                                                url : "/updatecart",
                                                data: "_token="+token+
                                                      "&kode_produk="+kode_produk+
                                                      "&qty="+qty,
                                                beforeSend: function() {
                                                    // setting a timeout
                                                    $.LoadingOverlay("show");
                                                },
                                                success: function(msg){
                                                  location.reload();
                                                }
                                          });

                                        @endforeach
                                    });

                                    });
                                    </script>
                                    <!-- delete cart -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12 mb-40">
                        <div class="cart-buttons mb-30">
                            <input type="submit" value="Update Cart" />
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mb-40">
                        <div class="cart-total fix">
                            <h3>Cart Totals</h3>
                            <table>
                                <tbody>
                                    <tr class="order-total">
                                      <?php
                                        $no_pemesanan = Session::get('no_pemesanan');
                                        $get_pemesanan = DB::table('pemesanan')->where('no_pemesanan', $no_pemesanan)->first();
                                        $get_subtotal = $get_pemesanan->subtotal;
                                        $get_grandtotal = $get_pemesanan->grandtotal;
                                      ?>
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount"><?php echo 'Rp'.number_format($get_subtotal,0,',','.'); ?></span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout section mt-30">
                              <form role="form" method="post" id="checkoutform">
                                @csrf
                                <input type="hidden" name="kurir" value="none">
                                <input type="hidden" name="paket" value="none">
                                <input type="hidden" name="biaya" value="0">
                                <input type="hidden" name="diskon" value="0">
                                <input type="hidden" name="subtotal" value="<?php echo $get_subtotal; ?>">
                                <input type="hidden" name="total" value="<?php echo $get_subtotal; ?>">
                                <a href="javascript:;" id="sendcheckout">
                                    Proses Checkout
                                </a>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

          <?php }else{ echo "Belum ada transaksi"; } ?>
        </div>
    </div><!-- Page Section End -->
    <script type="text/javascript">
      $(document).ready(function() {

          $("#sendcheckout").click(function(){

          var dataform = $("#checkoutform").serialize();
          //tinymce.triggerSave();
          var token = $("input[name='_token']").val();
          var kurir = $("#kurir").val();
          var paket = $("#paket").val();
          var biaya = $("#biaya").val();
          var diskon = $("#diskon").val();
          var subtotal = $("#subtotal").val();
          var total = $("#total").val();

          $.ajax({
            type: "POST",
            url : "/checkoutstore",
            data: dataform,
            beforeSend: function() {
              $.LoadingOverlay("show");
            },
            success: function(msg){
              document.location.href="/checkout";
            }
          });

        });

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
