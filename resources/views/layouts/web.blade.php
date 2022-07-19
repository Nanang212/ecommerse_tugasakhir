<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Store 6 | Jual Source Code dan Jasa Pembuatan Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('web/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->
    <script src="{{asset('web/js/vendor/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('web/css/icon-font.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('web/css/plugins.css')}}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('web/css/helper.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">

    <!-- Modernizer JS -->
    <script src="{{asset('web/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <?php
      $get_webmaster = DB::table('webmaster')->where('id_webmaster', '1')->first();
      $webmaster = $get_webmaster->webmaster;
      if($webmaster){ echo $webmaster; }else{}
    ?>

    <?php
      $get_pixel = DB::table('pixel')->where('id_pixel', '1')->first();
      $pixel = $get_pixel->pixel;
      $segmen = Request::segment(1);
      if($segmen=='thankyou'){ }else{
        if($pixel){ echo $pixel; }else{}
      }
    ?>

    <?php
      $get_pixel2 = DB::table('pixel')->where('id_pixel', '1')->first();
      $pixel2 = $get_pixel2->pixel2;
      $segmen = Request::segment(1);
      if($segmen=='thankyou'){
        if($pixel2){ echo $pixel2; }else{}
      }else{ }
    ?>

  <!-- loading -->
  <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@1.5.4/src/loadingoverlay.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@1.5.4/extras/loadingoverlay_progress/loadingoverlay_progress.min.js"></script>
  <!-- loading -->
  {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5facd522133c4c93"></script> --}}

</head>

<body>

@yield('content')

<!-- JS
============================================ -->

<!-- jQuery JS -->

<!-- Popper JS -->
<script src="{{asset('web/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('web/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('web/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('web/js/main.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/highlight.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tabifier.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jPages.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/js.js')}}"></script>

<script>
/* when document is ready */
$(function() {
  /* initiate plugin */
  $("div.holder").jPages({
    containerID: "itemContainer"
  });
});

</script>

</body>

</html>
