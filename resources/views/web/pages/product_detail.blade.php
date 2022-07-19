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

                        <h1>{{ $product->nama }}</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="/home">Home</a></li>
                            <li><a href="#">Single Product</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section section-padding">
            <div class="container">
                <div class="row row-30 mbn-50">

                    <div class="col-12">
                        <div class="row row-20 mb-10">

                            <div class="col-lg-6 col-12 mb-40">

                                <div class="pro-large-img mb-10 fix easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                    <a href="{{asset('assets/product/'.$product->gambar1)}}">
                                        <img src="{{asset('assets/product/'.$product->gambar1)}}" alt=""/>
                                    </a>
                                </div>
                                <!-- Single Product Thumbnail Slider -->
                                <ul id="pro-thumb-img" class="pro-thumb-img">
                                    <li><a href="{{asset('assets/product/'.$product->gambar1)}}" data-standard="{{asset('assets/product/'.$product->gambar1)}}"><img src="{{asset('assets/product/'.$product->gambar1)}}" alt="" /></a></li>
                                    <li><a href="{{asset('assets/product/'.$product->gambar2)}}" data-standard="{{asset('assets/product/'.$product->gambar2)}}"><img src="{{asset('assets/product/'.$product->gambar2)}}" alt="" /></a></li>
                                    <li><a href="{{asset('assets/product/'.$product->gambar3)}}" data-standard="{{asset('assets/product/'.$product->gambar3)}}"><img src="{{asset('assets/product/'.$product->gambar3)}}" alt="" /></a></li>
                                    <li><a href="{{asset('assets/product/'.$product->gambar4)}}" data-standard="{{asset('assets/product/'.$product->gambar4)}}"><img src="{{asset('assets/product/'.$product->gambar4)}}" alt="" /></a></li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-12 mb-40">
                                <div class="single-product-content">

                                    <div class="head">
                                        <div class="head-left">

                                            <h3 class="title">{{ $product->nama }}</h3>

                                            {{-- <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div> --}}

                                        </div>

                                        <div class="head-right">
                                            <span class="price">Rp {{ number_format($product->harga) }}</span>
                                        </div>
                                    </div>

                                    <div class="description">
                                        <p>{!! $product->deskripsi1 !!}</p>
                                    </div>

                                    {{-- <span class="availability">Availability: <span>In Stock</span></span> --}}
                                    <form class="product__form-wrap mb-30" method="post" id="updateform">
                                    @csrf
                                    <input type="hidden" name="idProduk" value="{{ $product->id }}">
                                    <div class="quantity-colors">

                                        <div class="quantity">
                                            <h5>Quantity:</h5>
                                            <input type="number" value="1" maxlength="12" id="qty" name="qty" class="form-control">
                                        </div>

                                    </div>

                                    <div class="actions">

                                        {{-- <button><i class="ti-shopping-cart"></i><span>ADD TO CART</span></button> --}}
                                        <?php
                                          $email = Session::get('email');
                                          if($email){
                                        ?>
                                          {{-- <button id="submit" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" title="Add to Cart" type="button">Add to cart</button> --}}
                                          <a href="javascript:;" id="submit" class="button extra-small button-black" tabindex="-1">
                                              <i class="ti-shopping-cart"></i><span>Add to cart</span>
                                          </a>
                                        <?php
                                          }else{
                                            $segmen = Request::segment(1);
                                            if($segmen){
                                            ?>
                                            <a href="/loginsegmen/{{ Request::segment(1) }}" class="button extra-small button-black" tabindex="-1">
                                                <i class="ti-shopping-cart"></i><span>Add to cart</span>
                                            </a>
                                            <?php }else{ ?>
                                              <a href="/login" class="button extra-small button-black" tabindex="-1">
                                                  <i class="ti-shopping-cart"></i><span>Add to cart</span>
                                              </a>
                                            <?php } ?>
                                        <?php } ?>

                                    </div>
                                    </form>
                                    <script type="text/javascript">
                                      $(document).ready(function() {
                                          //alert('test');
                                          //$.LoadingOverlay("show");
                                          $("#submit").click(function(){

                                          var dataform = $("#updateform").serialize();
                                          //tinymce.triggerSave();
                                          var token = $("input[name='_token']").val();
                                          var qty = $("#qty").val();

                                          if(qty <= 0){
                                            alert("Maaf, Jumlah tidak boleh kosong");
                                            $("#qty").focus();
                                            return (false);
                                          }

                                          $.ajax({
                                            type: "POST",
                                            url : "/cartadd",
                                            data: dataform,
                                            beforeSend: function() {
                                              $.LoadingOverlay("show");
                                            },
                                            success: function(msg){
                                              document.location.href="/cart";
                                            }
                                          });

                                        });

                                      });
                                    </script>
                                    {{-- <div class="tags">

                                        <h5>Tags:</h5>
                                        <a href="#">Electronic</a>
                                        <a href="#">Smartphone</a>
                                        <a href="#">Phone</a>
                                        <a href="#">Charger</a>
                                        <a href="#">Powerbank</a>

                                    </div> --}}

                                    <div class="share">

                                        <h5>Share: </h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="row mb-50">
                            <!-- Nav tabs -->
                            <div class="col-12">
                                <ul class="pro-info-tab-list section nav">
                                    <li><a class="active" href="#more-info" data-toggle="tab">Deskripsi</a></li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content col-12">
                                <div class="pro-info-tab tab-pane active" id="more-info">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- Page Section End -->

        <!-- Related Product Section Start -->
    	<div class="section section-padding pt-0">
    		<div class="container">
    			<div class="row">

    				<div class="section-title text-left col col mb-30">
    					<h1>Related Product</h1>
    				</div>

    				<div class="related-product-slider related-product-slider-1 col-12 p-0">

    					<div class="col">

    						<div class="product-item">
    							<div class="product-inner">

    								<div class="image">
    									<img src="{{asset('web/images/product/product-1.jpg')}}" alt="">

    									<div class="image-overlay">
    										<div class="action-buttons">
    											<button>add to cart</button>
    											<button>add to wishlist</button>
    										</div>
    									</div>

    								</div>

    								<div class="content">

    									<div class="content-left">

    										<h4 class="title"><a href="single-product.html">Tmart Baby Dress</a></h4>

    										<div class="ratting">
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star-half-o"></i>
    											<i class="fa fa-star-o"></i>
    										</div>

    										<h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
    										<h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

    									</div>

    									<div class="content-right">
    										<span class="price">$25</span>
    									</div>

    								</div>

    							</div>
    						</div>

    					</div>

    					<div class="col">

    						<div class="product-item">
    							<div class="product-inner">

    								<div class="image">
    									<img src="{{asset('web/images/product/product-2.jpg')}}" alt="">

    									<div class="image-overlay">
    										<div class="action-buttons">
    											<button>add to cart</button>
    											<button>add to wishlist</button>
    										</div>
    									</div>

    								</div>

    								<div class="content">

    									<div class="content-left">

    										<h4 class="title"><a href="single-product.html">Jumpsuit Outfits</a></h4>

    										<div class="ratting">
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    										</div>

    										<h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
    										<h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

    									</div>

    									<div class="content-right">
    										<span class="price">$09</span>
    									</div>

    								</div>

    							</div>
    						</div>

    					</div>

    					<div class="col">

    						<div class="product-item">
    							<div class="product-inner">

    								<div class="image">
    									<img src="{{asset('web/images/product/product-3.jpg')}}" alt="">

    									<div class="image-overlay">
    										<div class="action-buttons">
    											<button>add to cart</button>
    											<button>add to wishlist</button>
    										</div>
    									</div>

    								</div>

    								<div class="content">

    									<div class="content-left">

    										<h4 class="title"><a href="single-product.html">Smart Shirt</a></h4>

    										<div class="ratting">
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star-o"></i>
    										</div>

    										<h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
    										<h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

    									</div>

    									<div class="content-right">
    										<span class="price">$18</span>
    									</div>

    								</div>

    							</div>
    						</div>

    					</div>

    					<div class="col">

    						<div class="product-item">
    							<div class="product-inner">

    								<div class="image">
    									<img src="{{asset('web/images/product/product-4.jpg')}}" alt="">

    									<div class="image-overlay">
    										<div class="action-buttons">
    											<button>add to cart</button>
    											<button>add to wishlist</button>
    										</div>
    									</div>

    								</div>

    								<div class="content">

    									<div class="content-left">

    										<h4 class="title"><a href="single-product.html">Kids Shoe</a></h4>

    										<div class="ratting">
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star-half-o"></i>
    											<i class="fa fa-star-o"></i>
    										</div>

    										<h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
    										<h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

    									</div>

    									<div class="content-right">
    										<span class="price">$15</span>
    									</div>

    								</div>

    							</div>
    						</div>

    					</div>

    					<div class="col">

    						<div class="product-item">
    							<div class="product-inner">

    								<div class="image">
    									<img src="{{asset('web/images/product/product-5.jpg')}}" alt="">

    									<div class="image-overlay">
    										<div class="action-buttons">
    											<button>add to cart</button>
    											<button>add to wishlist</button>
    										</div>
    									</div>

    								</div>

    								<div class="content">

    									<div class="content-left">

    										<h4 class="title"><a href="single-product.html"> Bowknot Bodysuit</a></h4>

    										<div class="ratting">
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star"></i>
    											<i class="fa fa-star-half-o"></i>
    										</div>

    										<h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
    										<h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

    									</div>

    									<div class="content-right">
    										<span class="price">$12</span>
    									</div>

    								</div>

    							</div>
    						</div>

    					</div>

    				</div>

    			</div>
    		</div>
    	</div><!-- Related Product Section End -->

    <!-- konten -->

    <!-- Brand Section Start -->
    @include('web.components.brand')

    <!-- Footer Top Section Start -->
    @include('web.components.footer')

</div>
<!-- konten -->
@endsection
