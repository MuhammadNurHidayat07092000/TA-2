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
          <li><a href="{{ url('home2') }}">Beranda</a></li>
          <li><a href="#artikel">Artikel</a></li>
          <li class="drop-down"><a href="">Narkotika</a>
            <ul>
              <li><a href="{{ url('frontends/penyebab') }}">Penyebab</a></li>
              <li class="active"><a href="{{ url('frontends/dampak') }}">Dampak</a></li>
              <li><a href="{{ url('frontends/uu') }}">Undang-Undang Narkotika</a></li>
              <li><a href="{{ url('frontends/jenisnark') }}">Jenis-Jenis Narkotika</a></li>
              <li><a href="{{ url('frontends/ttgnark') }}">Pencarian</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>
    
</body>