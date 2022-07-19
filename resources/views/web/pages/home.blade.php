@extends('layouts.web')

@section('content')
<!-- konten -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- Hero Section Start -->
    @include('web.components.sliders')

    <!-- Product Section Start -->
    @include('web.components.productnew')

    <!-- Banner Section Start -->
    @include('web.components.promo')

    <!-- Product Section Start -->
    @include('web.components.product_home')

    <!-- Feature Section Start -->
    {{-- @include('web.components.service') --}}

    <!-- Brand Section Start -->
    @include('web.components.brand')

    <!-- Footer Top Section Start -->
    @include('web.components.footer')

</div>
<!-- konten -->
@endsection
