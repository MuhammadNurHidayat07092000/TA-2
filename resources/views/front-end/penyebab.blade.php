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
              <li class="active"><a href="{{ url('frontends/penyebab') }}">Penyebab</a></li>
              <li><a href="{{ url('frontends/dampak') }}">Dampak</a></li>
              <li><a href="{{ url('frontends/uu') }}">Undang-Undang Narkotika</a></li>
              <li><a href="{{ url('frontends/jenisnark') }}">Jenis-Jenis Narkotika</a></li>
              <li><a href="{{ url('frontends/pencarian') }}">Pencarian</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="container">
      <div style="margin-top: 15%">
          <h1 class="text-center mt-20">Penyebab</h1>
            <hr>
            <p><strong>Berikut adalah faktor-faktor penyebab seseorang menjadi penyalahguna narkoba:</strong> <br/>
                <br/>1) Penyebab dari diri sendiri yaitu Ketidakmampuan menyesuaikan diri dengan lingkungan Kepribadian yang lemah Kurangnya percaya diri Tidak mampu mengendalikan diri Dorongan ingin tahu,ingin mencoba,ingin meniru Dorongan ingin berpetualang Mengalami tekanan jiwa Tidak memikirkan akibatnya dikemudian hari Ketidaktahuan akan bahaya narkoba.<br/> 
                <br/>2) Penyebab yang bersumber dari keluarga(orang tua) Salah satu atau kedua orang tua adalah pengguna narkoba Tidak mendapatkan perhatian,dan kasih sayang dari orang tua Keluarga tidak harmonis(tidak ada komunikasi yang terbuka dalam keluarga) Orang tua tidak memberikan pengawasan kepada anaknya Orang tua terlalu memanjakan anaknya Orang tua sibuk mencari uang/mengejar karir sehingga perhatian kepada anaknya menjadi terabaikan.<br/>
                <br/>3) Penyebab dari teman/kelompok sebaya Adanya satu atau beberapa teman kelompok yang menjadi pengguna narkoba Adanya anggota kelompok yang menjadi pengedar narkoba Adanya ajakan atau rayuan dari teman kelompok untuk menggunakan narkoba Paksaan dari teman kelompok agar menggunakan narkoba karena apabila tidak mau menggunakan akan dianggap tidak setia kawan Ingin menunjukan perhatian kepada teman.<br/> 
                <br/>4.Penyebab yang bersumber dari lingkungan Masyarakat tidak acuh atau tidak peduli Longgarnya pengawasan sosial masyarakat Sulit mencari pekerjaan Penegakan hukum lemah Banyaknya pelanggaran hukum Kemiskinan dan pengangguran yang tinggi Menurunnya moralitas masyarakat Banyaknya pengedar narkoba yang mencari konsumen Banyaknya pengguna narkoba disekitar tempat tinggal.<br/>
                
                <br/><strong>Ada beberapa faktor yang menjadi penyebab penyalahgunaan narkotika pada seseorang. Berdasarkan kesehatan masyarakat, faktor-faktor penyebab timbulnya penyalahgunaan narkotika, terdiri dari:</strong> <br/> 
                
                <br/><strong> 1) Faktor Individu  Tiap individu memiliki perbedaan tingkat resiko untuk menyalahgunakan NAPZA</strong>. Faktor yang mempengruhi individu terdiri dari faktor kepribadian dan faktor konstitusi. Alasan-alasan yang biasanya berasal dari diri sendiri sebagai penyebab penyalahgunaan NAPZA antara lain: a. Keingintahuan yang besar untuk mencoba, tanpa sadar atau berpikir panjang mengenai akibatnya <br/> 
                <br/>b. Keinginan untuk bersenang-senang<br/>
                <br/>c. Keinginan untuk mengikuti trend atau gaya  <br/>
                <br/>d. Keinginan untuk diterima oleh lingkungan atau kelompok  <br/>
                <br/>e. Lari dari kebosanan, masalah atau kesusahan hidup  <br/>
                <br/>f. Pengertian yang salah bahwa penggunaan sekali-sekali tidak menimbulkan ketagihan  <br/>
                <br/>g. Tidak mampu atau tidak berani menghadapi tekanan dari lingkungan atau kelompok pergaulan untuk menggunakan NAPZA  <br/>
                <br/>h. Tidak dapat berkata TIDAK terhadap NAPZA <br/>

                <br/><strong>2) Faktor Lingkungan, meliputi:</strong> <br/>
                <br/>a. Lingkungan Keluarga Hubungan ayah dan ibu yang retak, komunikasi yang kurang efektif antara orang tua dan anak, dan kurangnya rasa hormat antar anggota keluarga merupakan faktor yang ikut mendorong seseorang pada gangguan penggunaan zat.<br/>  
                <br/>b. Lingkungan Sekolah Sekolah yang kurang disiplin, terletak dekat tempat hiburan, kurang memberi kesempatan pada siswa untuk mengembangkan diri secara kreatif dan positif, dan adanya murid pengguna NAPZA merupakan faktor kontributif terjadinya penyalahgunaan NAPZA.  <br/>
                <br/>c. Lingkungan Teman Sebaya Adanya kebutuhan akan pergaulan teman sebaya mendorong remaja untuk dapat diterima sepenuhnya dalam kelompoknya. Ada kalanya menggunakan NAPZA merupakan suatu hal yng penting bagi remaja agar diterima dalam kelompok dan dianggap sebagai orang dewasa.
            </p>
      </div>
  </div>
</body>