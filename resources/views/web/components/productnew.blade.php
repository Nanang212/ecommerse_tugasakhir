<!-- Product Section Start -->
<div class="product-section section section-padding pt-50">
  <div class="container">

    <div class="row">
      <div class="section-title text-center col mb-30">
        <h1>New Product</h1>
        {{-- <p>All featured product find here</p> --}}
      </div>
    </div>

    <div class="row">
      <div class="product-slider w-100">
        <?php $dataproduct = DB::table('produk')->where('jenisproduk','1')->limit(8)->get(); ?>
        @foreach ($dataproduct as $result)
        <?php
          $kategori = $result->kategoriproduk_id;
          $product = DB::table('kategoriproduk')->where('id', $kategori)->first();
          $namaKategori = $product->nama;
          $slug = $product->slug;
        ?>
        <div class="col">

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
    </div>

  </div>
</div><!-- Product Section End -->
