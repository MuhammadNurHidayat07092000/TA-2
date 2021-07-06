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
              <li><a href="{{ url('frontends/dampak') }}">Dampak</a></li>
              <li class="active"><a href="{{ url('frontends/uu') }}">Undang-Undang Narkotika</a></li>
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
          <h1 class="text-center mt-20">Undang-undang <a href="#"><span>Narkotika</span></a></h1>
            <hr>
            <img src="{{ asset('style2/assets/img/front-e/uud.jpg') }}" alt="image" class="mx-auto d-block">
            <hr>
            <br/> Berdasarkan penelitian terbaru BNN jumlah penyalah guna 5,8 juta orang. Mereka dipasok oleh pengedar yang jumlahnya sebanding dengan jumlah penyalah guna. Karena itu, masyarakat harus dapat menghindar dan mengantisipasinya.  
            Dalam teori kesehatan penyalah guna itu orang sakit kecanduan narkotika. Pengedar itu orang yang menambah parah sakit kecanduannya.
            Menurut konvensi internasional (UU No 8 tahun 1976) penyalahgunaan narkotika itu dilarang diancam dengan hukuman penjara. Tetapi apabila telah dilakukan pelakunya yaitu penyalah guna diberikan alternatif penghukuman berupa rehabilitasi.
            Berdasarkan UU No 35 tahun 2009 tentang Narkotika, yang bersumber UU No 8 tahun 1976, penyalah guna dinyatakan sebagai pelaku kejahatan (127/1). Namun pelaku kejahatan tersebut dijamin UU untuk direhabilitasi (pasal 4). Penyalah guna tidak memenuhi syarat ditahan dalam proses penyidikan, penuntutan, dan peradilan ( pasal 21 KUHAP). Dalam menangani perkara penyalah guna hakim wajib memperhatikan ketentuan tentang rehabilitasi (127/2). Hakim wajib membuktikan penyalah guna itu sebagai korban penyalahgunaan atau pecandu (127/3). Hakim diberi kewenangan untuk menghukum rehabilitasi yang bersifat wajib (pasal 103). Hukuman penjara statusnya sama dengan hukuman rehabilitasi.
            Penyalah guna adalah orang yang menggunakan narkotika tanpa hak atau melanggar hukum (pasal 1 angka 15). Penyalah guna adalah pelanggar hukum. Sedangkan (bedakan) pengguna narkotika dengan resep dokter adalah bukan perbuatan melanggar hukum karena narkotika itu obat. Menggunakan narkotika tanpa resep dokter berbahaya karena dapat menyebabkan penggunanya menderita sakit kecanduan narkotika.
            <br/>
            <br/> UU narkotika membagi penyalah guna menjadi 3 (tiga) berdasarkan proses pentahapan  penyalahgunaannya  yaitu 
            <br/>
            <br/><strong>Tahap pertama</strong>, tahap penyalah guna pemula. Yaitu orang yang tidak sengaja menyalahgunakan narkotika karena dibujuk, ditipu, dirayu, diperdaya, atau dipaksa menggunakan narkotika. Pada tahap ini penyalah guna disebut korban penyalahgunaan narkotika (pasal 54).
            <br/>
            <br/><strong>Tahap kedua</strong>, tahap menjadi penyalah guna dengan sadar karena sudah tidak perlu ditipu, dibujuk, dirayu, diperdaya, atau dipaksa menggunakan narkotika. Pada tahap ini mereka sudah atas kemauan sendiri menyalahgunakan narkotika. Karena sudah mengidap kecanduan narkotika. Mereka merasa narkotika itu obat yang dapat menghilangkan rasa sakit yang dideritanya.
            <br/>
            <br/><strong>Tahap ketiga</strong>, tahap menjadi pecandu. Yaitu penyalah guna narkotika dalam keadaan ketergantungan. Mereka menjadi penyalah guna narkotika karena tuntutan kebutuhan fisik maupun psikis. Kalau tidak dipenuhi berdampak buruk terhadap kondisi fisik dan psikis dengan gejala beringas, perilakunya tidak terkendali, bahkan ada yang berhalusinasi.
            <br/>

            <br/><h5>Tips agar keluarga bebas (bersih) dari penyalah gunaan narkotika:</h5>
            <br/><strong>Tips pencegahan</strong>
            <br/>1. Jangan mengonsumsi obat secara sembarangan. Ikuti petunjuk dokter. Obat jenis narkotika dapat menyebabkan sakit adiksi kecanduan narkotika.
            <br/>2. Pahami bahwa narkotika itu obat yang penggunaannya hanya atas petunjuk dokter, tanpa resep dokter adalah kejahatan.
            <br/>3. Bekali keluarga pengetahuan hidup sehat, hindari merokok, minum minuman keras, tidak mengonsumsi obat berbahaya
            <br/>4. Lindungi keluarga dari salah pergaulan. Jangan sampai anggota keluarganya tertipu, terbujuk, terpedaya rayuan teman, yang mengajak untuk menggunakan narkotika jenis apapun dengan alasan apapun.
            <br/>5. Hindari tempat dan acara yang sering digunakan untuk pesta narkotika.  Karena dengan mudah dapat memperdaya maupun memaksa seseorang menggunakan narkotika.
            <br/>6. Ketahuilah bahwa penyalah guna narkotika adalah orang sakit adiksi ketergantungan narkotika yang hanya dapat pulih dengan cara direhabilitasi.
            <br/>

            <br/><strong>Tips menghadapi penyalah guna</strong>
            <br/>1. Jangan nervous, pahami bahwa anak yang kedapatan menjadi penyalah guna itu sebagai orang sakit. Maka tindakan paling utama adalah mengambil langkah untuk menyembuhkan melalui rehabilitasi.
            <br/>2. Ketahui bahwa penyalah guna narkotika itu orang sakit kecanduan narkotika yang sifatnya kronis artinya penyalah guna akan terus mengulangi mengkonsumsi narkotika secara periodik untuk menjaga agar tubuhnya tidak terasa sakit
            <br/>3. Orang tua bertanggung jawab rehabilitasi  penyembuhannya kalau ada anaknya yang menjadi penyalah guna agar sembuh.
            <br/>4. Ambil langkah untuk menghubungi dokter ahli jiwa atau psikolog agar mendapatkan informasi bagaimana proses penyembuhan
            <br/>5. Secara yuridis orang tua wajib melaporkan ke Institusi Penerima Wajib Lapor (IPWL) yaitu rumah sakit yang ditunjuk Menteri Kesehatan yang tersebar diseluruh kota/kabupaten di seluruh indonesia untuk mendapatkan perawatan/rehabilitasi agar sembuh/pulih.
            <br/>6. Setelah selesai menjalani rehabilitasi tetap harus dilakukan pendampingan ke mana mereka pergi agar tidak terjerumus lagi karena sifat penyakit adiksi narkotika rentan kambuh menggunakan narkotika lagi (relap).
            <br/>7. Pastikan bahwa penyalah guna tidak kambuh lagi, baru dinyatakan sembuh dan tidak memerlukan pendampingan lagi.
            <br/>
      </div>
  </div>
</body>