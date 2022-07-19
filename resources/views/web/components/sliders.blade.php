<div class="hero-section section">

    <!-- Hero Slider Start -->
    <div class="hero-slider hero-slider-one fix">

        <!-- Hero Item Start -->
        @foreach ($banner as $result)
        <div class="hero-item" style="background-image: url({{asset('assets/banner/'.$result->gambar)}})">

            <!-- Hero Content -->
            <div class="hero-content">

                <h1>{{ $result->text1 }} <br>{!! $result->text2 !!}</h1>
                <a href="{{ $result->customlink }}">{{ $result->button_text }}</a>

            </div>

        </div><!-- Hero Item End -->
        @endforeach
    </div><!-- Hero Slider End -->

</div><!-- Hero Section End -->
