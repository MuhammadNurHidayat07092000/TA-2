<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ asset('style2/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('style2/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }} ">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('style2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style2/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('style2/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style2/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style2/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('style2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('style2/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
   <script src="{{ asset('style2/assets/vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/php-email-form/validate.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/counterup/counterup.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/venobox/venobox.min.js') }}"></script>
   <script src="{{ asset('style2/assets/vendor/aos/aos.js') }}"></script>
   <script src="{{ asset('style2/assets/js/main.js') }}"></script>

  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <!-- <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a> -->
        <i class="icofont-phone"></i> +62852-3894-4442
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="youtube"><i class="icofont-youtube"></i></a>
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html">BNNP <span>NTB</span></a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="drop-down"><a href="">Profile</a>
            <ul>
              <li><a href="{{ url('frontends/sejarah') }}">Sejarah</a></li>
              <li><a href="{{ url('frontends/visimisi') }}">Visi & Misi</a></li>
              <li><a href="{{ url('frontends/struktur') }}">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="active"><a href="{{ url('home2') }}">Beranda</a></li>
          {{-- <li><a href="#artikel">Artikel</a></li> --}}
          <li class="drop-down"><a href="">Narkotika</a>
            <ul>
              <li><a href="{{ url('frontends/penyebab') }}">Penyebab</a></li>
              <li><a href="{{ url('frontends/dampak') }}">Dampak</a></li>
              <li><a href="{{ url('frontends/uu') }}">Undang-Undang Narkotika</a></li>
              {{-- <li><a href="{{ url('frontends/jenisnark') }}">Jenis-Jenis Narkotika</a></li> --}}
              <li><a href="{{ url('frontends/pencarian') }}">Pencarian</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat datang</h1>
      <p>Bersama membangun Indonesia bebas dari <strong>Narkotika</strong></p>
      <div class="d-flex">
        {{-- <a href="#about" class="btn-get-started scrollto d-flex">Get Started</a> --}}
        <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#scrollmodal">
          Watch Video <i class="icofont-play-alt-2"></i>
        </button>
    </div>
  </section>

  <div class="d-flex align-items-center">
    <div class="container aos-init aos-animate">
      <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="scrollmodalLabel">Daftar Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <ul>
                    <li>
                      <a href="https://www.youtube.com/watch?v=WXn_-kpMA2M" class="venobox btn-watch-video vbox-item" data-vbtype="video" data-autoplay="false"> Video 1</a><br>  
                    </li>
                    <li>
                      <a href="https://www.youtube.com/watch?v=WXn_-kpMA2M" class="venobox btn-watch-video vbox-item" data-vbtype="video" data-autoplay="false"> Video 2</a><br>  
                    </li>
                    <li>
                      <a href="https://www.youtube.com/watch?v=WXn_-kpMA2M" class="venobox btn-watch-video vbox-item" data-vbtype="video" data-autoplay="false"> Video 3</a><br>  
                    </li>
                  </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    {{-- <button type="button" class="btn btn-primary">Confirm</button> --}}
                </div>
           </div>
        </div>
      </div>
    </div>
  </div>
{{-- 
  @yield('about')
  @yield('counts')
  @yield('clients') --}}
  @yield('articles')
  @yield('maps')
  @yield('footer')

  {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"65e0f372bacd0d40","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script> --}}

</body>
</html>