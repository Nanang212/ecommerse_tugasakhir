<div class="banner-section section section-padding pt-0 fix">
    <div class="row row-5 mbn-10">
      @foreach ($promo as $result)
        <div class="col-lg-4 col-md-6 col-12 mb-10">
            <div class="banner banner-3">

                <a href="#" class="image"><img src="{{asset('assets/promo/'.$result->gambar)}}" alt="Banner Image"></a>

                <div class="content" style="background-image: url(./web/images/banner/banner-3-shape.png)">
                    {{-- <h1>New Arrivals</h1> --}}
                    <h2>{{ $result->nama }}</h2>
                    <h4>{{ $result->detail }}</h4>
                </div>

                <a href="{{ $result->permalink }}" class="shop-link" data-hover="More Detail">More Detail</a>

            </div>
        </div>
      @endforeach
    </div>
</div><!-- Banner Section End -->
