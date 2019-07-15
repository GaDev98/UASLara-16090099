<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Manganime</title>

  <link href="{{asset('public/Template/images/logo/Logo.png')}}" rel='shortcut icon'>
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/font-awesome.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/owl.carousel.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/bootsnav.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/jquery.fancybox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/product-tab.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/settings.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/reset.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/hero_slider.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/public/Template/css/genres.css') }}">

      
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

<!-- Loader -->
<div id="loader-wrapper">
  <div id="loader">
    <div class="logo-loader"><img src="{{asset('public/Template/images/logo/Logo.png')}}" alt="image"></div>
    <div class="cssload-overlay"></div>
  </div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
<!--/#Loader--> 

<!--header-->
<header id="header-4">
      <div id="header_top_4" class="header_top"> 
        
        <!--Search-->
        <div id="search">
          <button type="button" class="close">×</button>
          <form action="{{route('cari')}}" method="GET">
            <input type="search" value="{{ old('cari') }}" placeholder="Type Here For Search...." required/>
            <button type="submit" class="btn_default cd-btn">Search</button>
          </form>
        </div>
        <!--Search-->
        
        <!-- <p>Cari Data Pegawai :</p>
  <form action="/pegawai/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
  </form> -->

        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="header-top-logo"><img src="{{asset('public/Template/images/logo/coba3.png')}}" alt=""></div>
            </div>
            <div class="col-sm-8 col-md-5 col-xs-12">
              <div class="top-number">
                <p><i class="fa fa-phone-square"></i> 0895361638606</p>
              </div>
              <div class="top-number">
                <p><i class="fa fa-envelope"></i> <a href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=CllgCJqbQRbQjNSKHPHglCMDKVzKHvPZggpGrFnVVQXXcvtMVwvCHkmFxnHZlcrsNffGBlZfdgB"> isekaigame98@gmail.com</a> </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="social-share">
                <ul>
                  <li><a href="https://www.facebook.com/profile.php?id=100009953237120"><i class="fa fa-facebook"></i></a> </li>
                  <li><a href="https://twitter.com/ghiofir"><i class="fa fa-twitter"></i></a> </li>
                  <li><a href="https://www.linkedin.com/in/muhammad-nazil-062b69146/"><i class="fa fa-linkedin"></i></a> </li>
                  <li class="search_btn"><a href="#"><i class="fa fa-search"></i></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container"> 

          <!-- Start Atribute Navigation -->
          <!-- <div class="attr-nav"> -->
            <!-- <ul>
              <li class="appintment-btn"><a href="appointment.html" class="cd-btn secondary">Appointment</a></li>
            </ul>
          </div> -->
          <!-- End Atribute Navigation -->
          @include('User.menu.menu')
      </nav>
</header>
<!--/#header--> 
<div class="content-wrapper">
    @yield('usercontent')
  </div>


@include('User.menu.Footer')

<script type="text/javascript" src="{{asset ('/public/Template/js/star-rating.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/jquery.appear.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/jquery-countTo.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/bootsnav.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/parallaxie.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/jquery.typewriter.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/hero_slider.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/themepunch/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/themepunch/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/themepunch/themepunch_revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/themepunch/themepunch_revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/themepunch/themepunch_revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/themepunch/themepunch_revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/themepunch/themepunch_revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{asset ('/public/Template/js/function.js') }}"></script>

  </body>

  <!-- Subiz -->
<script>
(function(s, u, b, i, z){
  u[i]=u[i]||function(){
    u[i].t=+new Date();
    (u[i].q=u[i].q||[]).push(arguments);
  };
  z=s.createElement('script');
  var zz=s.getElementsByTagName('script')[0];
  z.async=1; z.src=b; z.id='subiz-script';
  zz.parentNode.insertBefore(z,zz);
})(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
subiz('setAccount', 'achiwyneuipxsbhk');
</script>
<!-- End Subiz -->


</html>