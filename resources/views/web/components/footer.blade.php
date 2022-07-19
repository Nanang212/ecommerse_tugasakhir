<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>
<div class="footer-top-section section bg-theme-two-light section-padding">
    <div class="container">
        <div class="row mbn-40">
          <?php
            $getlogo = DB::table('logo')->where('id_logo', '1')->first();
            $logo = $getlogo->logo;

            $carabelanja = DB::table('page')->where('id', '1')->first();
            $slugbelanja = $carabelanja->slug;

            $term = DB::table('page')->where('id', '2')->first();
            $slugterm  = $term->slug;

            $profiltoko = DB::table('profiltoko')->where('id_profiltoko', '1')->first();
            $namatoko  = $profiltoko->nama;
            $profile  = $profiltoko->profile;
            $alamat  = $profiltoko->alamat;
            $email  = $profiltoko->email;
            $telepon  = $profiltoko->telepon;

            $gettwitter = DB::table('twitter')->where('id_twitter', '1')->first();
            $twitter  = $gettwitter->twitter;
            $getinstagram = DB::table('instagram')->where('id_instagram', '1')->first();
            $instagram  = $getinstagram->instagram;
            $getfacebook = DB::table('facebook')->where('id_facebook', '1')->first();
            $facebook  = $getfacebook->facebook;
            $getyoutube = DB::table('youtube')->where('id_youtube', '1')->first();
            $youtube  = $getyoutube->youtube;
          ?>

            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-40">
                <h4 class="title">ABOUT US</h4>
                <p>{!! $profile !!}</p>
            </div>

            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-40">
                <h4 class="title">CONTACT US</h4>
                <p>{{$alamat}}</p>
                <p><a href="tel:{{$telepon}}">{{$telepon}}</a></p>
                <p><a href="mailto:{{$email}}">{{$email}}</a></p>
            </div>

            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-40">
                <h5>FOLLOW US</h5>
                <div >
                  <a href="{{$facebook}}" target="_blank" class="fa fa-facebook"></a>
                  <a href="{{$instagram}}" target="_blank" class="fa fa-instagram"></a>
                  <a href="{{$twitter}}" target="_blank" class="fa fa-twitter"></a>
                  <a href="{{$youtube}}" target="_blank" class="fa fa-youtube"></a>
                </div>
            </div>

        </div>
    </div>
</div><!-- Footer Top Section End -->

<!-- Footer Bottom Section Start -->
<div class="footer-bottom-section section bg-theme-two pt-15 pb-15">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="footer-copyright">Copyright &copy; <a href="/home">{{ $namatoko }}</a> {{ date('Y') }} All rights reserved</p>
            </div>
        </div>
    </div>
</div><!-- Footer Bottom Section End -->
