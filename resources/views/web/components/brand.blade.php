<div class="brand-section section section-padding pt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="brand-slider">
              @foreach ($brand as $result)
                <div class="brand-item col">
                    <img src="{{asset('assets/brand/'.$result->gambar)}}" alt="">
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div><!-- Brand Section End -->
