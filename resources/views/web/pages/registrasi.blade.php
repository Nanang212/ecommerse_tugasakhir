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

                    <h1>Register</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="/home">Home</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section section-padding">
        <div class="container">
            <div class="row mbn-40">

                <div class="col-lg-4 col-12 mb-40">
                    <div class="login-register-form-wrap">
                      <h3>Register</h3>
                      <form method="post" action="/registerinsert" id="updateform">
                        @csrf
                          <div class="row">
                              <div class="col-md-12 col-12 mb-15"><input type="text" name="name" id="name" maxlength="90"  placeholder="Nama Lengkap"></div>
                              <div class="col-md-12 col-12 mb-15"><input type="text" id="email" name="email" maxlength="90"  placeholder="Email"></div>
                              <div class="col-md-12 col-12 mb-15"><input type="email" name="telepon" id="telepon" maxlength="90"  placeholder="Telepon"></div>
                              <div class="col-md-12 col-12 mb-15"><input type="password" name="password" id="password" maxlength="90"  placeholder="Password"></div>
                              <div class="col-md-12 col-12"><input type="button" id="submit" value="Register" style="background-color: #1a161e; color: #ffffff; border-radius: 50px; padding: 5px 40px; font-weight: 600;"></div>
                          </div>
                      </form>
                      <script type="text/javascript">
                        $(document).ready(function() {

                          $("#submit").click(function(){

                            var dataform = $("#updateform").serialize();

                            var token = $("input[name='_token']").val();
                            var name = $("#name").val();
                            var email = $("#email").val();
                            var telepon = $("#telepon").val();
                            var password = $("#password").val();

                            if(name == 0){
                              alert("Maaf, Nama tidak boleh kosong");
                              $("#name").focus();
                              return (false);
                            }

                            if(email == 0){
                              alert("Maaf, Email tidak boleh kosong");
                              $("#email").focus();
                              return (false);
                            }

                            if(telepon == 0){
                              alert("Maaf, Telepon tidak boleh kosong");
                              $("#telepon").focus();
                              return (false);
                            }

                            if(password == 0){
                              alert("Maaf, Password tidak boleh kosong");
                              $("#password").focus();
                              return (false);
                            }

                            $.ajax({
                        		    type: "POST",
                        		    url : "/cekemail",
                        		    data: "_token="+token+
                                  "&email="+email,
                        		    beforeSend: function() {
                        		        $.LoadingOverlay("show");
                        		    },
                        		    success: function(msg){
                                  //alert(msg);
                                  if(msg=='1'){
                                    alert('Email sudah digunakan');
                                  }else{
                                    //konten
                                    $.ajax({
                                      type: "POST",
                                      url : "/registerinsert",
                                      data: dataform,
                                      beforeSend: function() {
                                        //$.LoadingOverlay("show");
                                      },
                                      success: function(msg){
                                        //location.reload();
                                        document.location.href="/registersuccess";
                                      }
                                    });
                                    //konten
                                  }
                                }
                            });

                          });

                        });
                      </script>
                    </div>
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
