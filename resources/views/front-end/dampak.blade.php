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
          {{-- <li><a href="#artikel">Artikel</a></li> --}}
          <li class="drop-down active"><a href="">Narkotika</a>
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
  <div class="container">
      <div style="margin-top: 15%">
          <h1 class="text-center mt-20"> Dampak </h1>
            <hr>
            <br/><strong>1) DAMPAK PENYALAHGUNAAN NARKOBA TERHADAP FISIK</strong>
            <br/>1.	Gangguan pada system syaraf (neurologis) seperti: kejang-kejang, halusinasi, gangguan kesadaran, kerusakan syaraf tepi
            <br/>2.	Gangguan pada jantung dan pembuluh  darah (kardiovaskuler) seperti: infeksi akut otot jantung, gangguan peredaran darah
            <br/>3.	Gangguan pada kulit (dermatologis) seperti: penanahan  (abses), alergi, eksim
            <br/>4.	Gangguan pada paru-paru (pulmoner) seperti: penekanan fungsi pernapasan, kesukaran bernafas, pengerasan jaringan paru-paru
            <br/>5.	Sering sakit kepala, mual-mual dan  muntah, murus-murus, suhu tubuh meningkat, pengecilan hati dan sulit tidur
            <br/>6.	Dampak penyalahgunaan narkoba terhadap kesehatan reproduksi adalah gangguan padaendokrin, seperti: penurunan fungsi hormon reproduksi (estrogen, progesteron, testosteron), serta gangguan fungsi seksual
            <br/>7.	Dampak penyalahgunaan narkoba terhadap kesehatan reproduksi pada remaja perempuan antara lain perubahan periode menstruasi, ketidakteraturan menstruasi, dan amenorhoe (tidak haid)
            <br/>8.	Bagi pengguna narkoba melalui jarum suntik, khususnya pemakaian jarum suntik secara bergantian, risikonya  adalah tertular penyakit seperti hepatitis B, C, dan HIV yang hingga saat ini belum ada obatnya.
            <br/>9.	Penyalahgunaan narkoba bisa berakibat fatal ketika terjadi over dosis yaitu konsumsi narkoba melebihi kemampuan tubuh untuk menerimanya. Over dosis bisa menyebabkan kematian
            <br/>
            
            <br/><strong>2) DAMPAK PENYALAHGUNAAN NARKOBA TERHADAP PSIKIS</strong>
            <br/>1.	Lamban kerja, ceroboh kerja, sering tegang dan gelisah
            <br/>2.	Hilang kepercayaan diri, apatis, pengkhayal, penuh curiga
            <br/>3.	Agitatif, menjadi ganas dan tingkah laku yang brutal
            <br/>4.	Sulit berkonsentrasi, perasaan kesal dan tertekan
            <br/>5.	Cenderung menyakiti diri, perasaan tidak aman, bahkan bunuh diri
            <br/>
            
            <br/><strong>3) DAMPAK PENYALAHGUNAAN NARKOBA TERHADAP LINGKUNGAN SOSIAL</strong> 
            <br/>1.	Gangguan mental, anti-sosial dan asusila, dikucilkan oleh lingkungan
            <br/>2.	Merepotkan dan menjadi beban keluarga
            <br/>3.	Pendidikan menjadi terganggu, masa depan suram
            Dampak fisik, psikis dan sosial berhubungan erat. Ketergantungan fisik akan mengakibatkan rasa sakit yang luar biasa (sakaw) bila terjadi putus obat (tidak mengkonsumsi obat pada  waktunya) dan dorongan psikologis berupa keinginan sangat kuat untuk mengkonsumsi (bahasa gaulnya sugest). Gejata fisik dan psikologis ini juga berkaitan dengan gejala sosial seperti dorongan untuk membohongi orang tua, mencuri, pemarah, manipulatif, dll.
            Demikianlah beberapa hal yang dapat kita ketahui bagaimana dampak penyalahgunaan narkoba terhadap diri kita, maka jauhilah narkoba!!!
      </div>
  </div>
</body>