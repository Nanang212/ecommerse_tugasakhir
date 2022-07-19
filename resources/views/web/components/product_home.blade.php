<div class="product-section section section-padding pt-0">
    <div class="container">

        <div class="row">
            <div class="section-title text-center col mb-30">
                <h1>Popular Products</h1>
                {{-- <p>All popular product find here</p> --}}
            </div>
        </div>

        <div class="row mbn-40">
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
            <div class="col-12" style="text-align: center;">
              <a href="/products" style="background-color: #1a161e; color: #ffffff; border-radius: 50px; padding: 5px 40px; font-weight: 600;">All Product</a>
            </div>
        </div>

    </div>
</div><!-- Product Section End -->
