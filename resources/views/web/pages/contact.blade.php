@extends('layouts.web')

@section('content')
<!-- konten -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    @include('web.components.header')

    <!-- konten -->
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(./web/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Contact us</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="javascript:;">Contact us</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">
            <div class="row row-30 mbn-40">

               <div class="contact-info-wrap col-md-6 col-12 mb-40">
                   <h3>Get in Touch</h3>
                   {{-- <p>Jadusona is the best theme for  elit, sed do eiusmod tempor dolor sit ame  tse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam,</p> --}}
                   <ul class="contact-info">
                       <li>
                           <i class="fa fa-map-marker" style="padding: 0px;"></i>
                           <p>{{ $profiletoko->alamat }}</p>
                       </li>
                       <li>
                           <i class="fa fa-phone" style="padding: 0px;"></i>
                           <p><a href="javascript:;">{{ $profiletoko->telepon }}</a></p>
                       </li>
                       <li>
                           <i class="fa fa-globe" style="padding: 0px;"></i>
                           <p><a href="javascript:;">{{ $profiletoko->email }}</a></p>
                       </li>
                   </ul>
               </div>

               <div class="contact-form-wrap col-md-6 col-12 mb-40">
                   <h3>Leave a Message</h3>
                   <form method="post" action="/contactadd" id="updateform">
                     @csrf
                       <div class="contact-form">
                           <div class="row">
                               <div class="col-lg-6 col-12 mb-30"><input type="text" name="nama" id="nama" placeholder="Your Name"></div>
                               <div class="col-lg-6 col-12 mb-30"><input type="email" name="email" id="email" placeholder="Email Address"></div>
                               <div class="col-12 mb-30"><textarea name="message" id="message" placeholder="Message"></textarea></div>
                               <div class="col-12"><input type="button" id="submit" value="SUBMIT" style="background-color: #1a161e; color: #ffffff; border-radius: 50px; padding: 5px 40px; font-weight: 600;"></div>
                           </div>
                       </div>
                   </form>
                   <script type="text/javascript">
                    $(document).ready(function() {

                      $("#submit").click(function(){

                        var dataform = $("#updateform").serialize();

                        var token = $("input[name='_token']").val();
                        var nama = $("#nama").val();
                        var email = $("#email").val();
                        var message = $("#message").val();

                        if(nama.length == 0){
                          alert("Maaf, Nama tidak boleh kosong");
                          $("#nama").focus();
                          return (false);
                        }

                        if(email.length == 0){
                          alert("Maaf, Email tidak boleh kosong");
                          $("#email").focus();
                          return (false);
                        }

                        if(message.length == 0){
                          alert("Maaf, Pesan tidak boleh kosong");
                          $("#message").focus();
                          return (false);
                        }

                        $.ajax({
                          type: "POST",
                          url : "/contactadd",
                          data: dataform,
                          beforeSend: function() {
                            $.LoadingOverlay("show");
                          },
                          success: function(msg){
                            document.location.href="/contactsuccess";
                          }
                        });

                      });

                    });
                </script>

                <p class="form-messege"></p>
               </div>

            </div>
        </div>
    </div><!-- Page Section End -->
    <!-- konten -->

    <!-- Brand Section Start -->
    @include('web.components.brand')

    <!-- Footer Top Section Start -->
    @include('web.components.footer')

</div>
<!-- konten -->
@endsection
