<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one bg-theme-two">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col mt-10 mb-10 d-none d-md-flex">
                  <?php
                    $profiltoko = DB::table('profiltoko')->where('id_profiltoko', '1')->first();
                    $nama  = $profiltoko->nama;
                    $telepon  = $profiltoko->telepon;
                    $email  = $profiltoko->email;
                  ?>
                    <!-- Header Top Left Start -->
                    <div class="header-top-left">
                        <p>Welcome to {{$nama}}</p>
                        <p>Hotline: <a href="tel:{{$telepon}}">{{$telepon}}</a></p>
                    </div><!-- Header Top Left End -->
                </div>

                <div class="col mt-10 mb-10">
                    <!-- Header Language Currency Start -->

                </div>

                <div class="col mt-10 mb-10">
                    <!-- Header Shop Links Start -->
                    <div class="header-top-right">

                        {{-- <p><a href="my-account.html">My Account</a></p> --}}
                        {{-- <p><a href="login-register.html">Register</a><a href="login-register.html">Login</a></p>
                        <p><a href="login-register.html">Register</a><a href="login-register.html">Login</a></p> --}}
                    </div><!-- Header Shop Links End -->
                </div>

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky">
        <div class="container-fluid">
            <div class="row menu-center align-items-center justify-content-between">

                <div class="col mt-15 mb-15">
                    <!-- Logo Start -->
                    <div class="header-logo">
                      <?php
                        $getlogo = DB::table('logo')->where('id_logo', '1')->first();
                        $logo = $getlogo->logo;
                      ?>
                        <a href="/home">
                            <img src="{{asset('assets/logo/'.$logo)}}" alt="{{$nama}}" style="max-height: 40px;">
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-2 order-lg-3">
                    <!-- Header Advance Search Start -->
                    <div class="header-shop-links">

                        <div class="header-search">
                            <button class="search-toggle"><img src="{{asset('web/images/icons/search.png')}}" alt="Search Toggle"><img class="toggle-close" src="{{asset('web/images/icons/close.png')}}" alt="Search Toggle"></button>
                            <div class="header-search-wrap">
                                <form action="/search" method="post">
                                  @csrf
                                    <input type="text" name="search" id="search" placeholder="Type and hit enter">
                                    <button type="submit"><img src="{{asset('web/images/icons/search.png')}}" alt="Search"></button>
                                </form>
                            </div>
                        </div>

                        {{-- <div class="header-wishlist">
                            <a href="wishlist.html"><img src="{{asset('web/images/icons/wishlist.png')}}" alt="Wishlist"> <span>02</span></a>
                        </div> --}}

                        <div class="header-mini-cart">
                          <?php
                            $no_pemesanan = Session::get('no_pemesanan');
                            $jumlahPemesanan  = DB::table('detailpemesanan')->where('no_pemesanan', $no_pemesanan)->count();
                            if($jumlahPemesanan){
                              $val_jumlah = $jumlahPemesanan;
                            }else{
                              $val_jumlah = '0';
                            }
                          ?>
                            <a href="{{route('cart')}}"><img src="{{asset('web/images/icons/cart.png')}}" alt="Cart"> <span>{{ $val_jumlah }}</span></a>
                        </div>

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-3 order-lg-2">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li style="margin-right: 25px;"><a href="{{route('home')}}">HOME</a></li>
                                <li style="margin-right: 25px;"><a href="{{route('about')}}">ABOUT US</a></li>
                                <li style="margin-right: 25px;"><a href="{{route('products')}}">PRODUCT</a></li>
                                <li style="margin-right: 25px;"><a href="{{route('contact')}}">CONTACT US</a></li>
                                <li style="margin-right: 25px;"><a href="javascript:;">SUPPORT</a>
                                    <ul class="sub-menu">
                                        <li><a href="/page/cara-belanja">Cara Belanja</a></li>
                                        <li><a href="/page/terms-condition">Term & Condition</a></li>
                                    </ul>
                                </li>
                                <li style="margin-right: 25px;"><a href="javascript:;">ACCOUNT</a>
                                    <ul class="sub-menu">
                                      <?php $email = Session::get('email'); ?>
                                      <?php if($email){ ?>
                                        <li><a href="/member/dashboard">Dashboard</a></li>
                                        <li><a href="/memberlogout">Logout</a></li>
                                      <?php }else{ ?>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                      <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header BOttom End -->

</div><!-- Header Section End -->
