-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 05:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_bnn2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(15) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` int(16) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `nama_admin`, `email`, `no_hp`, `alamat`, `username`, `password`) VALUES
(1, 'fahmi', 'Haerulpahmi.media@gmail.com', 2147483647, 'labulia', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `isi`, `gambar`, `updated_at`, `created_at`) VALUES
(1, 'Sita 122,15 Kg Sabu, BNN Selamatkan 600 Ribu Jiwa', 'Badan Narkotika Nasional (BNN) amankan 122,15 Kg sabu dari tiga kasus berbeda pada bulan April 2019. Sembilan orang tersangka berhasil ditangkap dari sejumlah daerah di Sumatera. Adapun ketiga ungkap kasus tersebut sebagai berikut.\n<br/><br/>\nKasus Pertama\nSejumlah 60 bungkus kemasan teh cina berisi + 60 (enam puluh) Kg sabu disita petugas BNN dari tangan tersangka berinisial S alias AWI dan SA alias WAN. Kedua tersangka bersama barang bukti diamankan petugas di depan sekolah SMPN 1 Lima Puluh, Jl.Besar Lima Puluh No.7 Kec.Lima Puluh, Kab.Batubara, Prov.sumatera Utara, Jumat (12/4) sekitar pukul 12.00 WIB.\nBerdasarkan hasil penyidikan yang dilakukan oleh petugas diketahui bahwa kedua tersangka berasal dari Pekanbaru dan mendapat perintah dari seorang berinisial AA untuk mengambil barang di Pakning, Kabupaten Bengkalis, Kamis (11/4) dengan menggunakan sebuah mobil sewaan. Setibanya di Bengkalis AWI dan WAN kemudian bertemu dengan seorang pria berinisial A sekitar pukul 21.00 WIB yang kemudian memasukan 60 bungkus kemasan teh cina ke dalam mobil sewaan tersebut yang dibantu oleh lima orang lainnya yang salah satunya berinisial AK. Tersangka AK pun ditangkap di tempat terpisah di Dumai.\nSetelah itu, kedua tersangka AWI dan WAN pun mengendarai mobil tersebut menuju Medan, Sumatera Utara, sebagaimana yang telah diperintahkan oleh AA dengan menggunakan GPS. Namun, sebelum tiba di Medan mobil yang dibawa oleh para tersangka dihadang oleh dua mobil petugas BNN. Kemudian petugas pun melakukan penggeledahan menemukan 15 bungkus kemasan teh cina berisi sabu yang disimpan di dalam tas yang diletakkan di bawah kursi bagian tengah dan 45 bungkus di bawah dashboard mobil.\nPara tersangka bersama barang bukti selanjutnya dibawa ke kantor BNN untuk dilakukan proses penyidikan lebih lanjut. Para tersangka pun terancam Pasal 114 Junto Pasal 132 ayat (1) Subsider Pasal 112 Junto Pasal 132 ayat (1) Undang Undang Republik Indonesia Nomor 35 Tahun 2009 tentang Narkotika dengan ancaman maksimal pidana mati.\n<br/><br/> \nKasus Kedua\nBNN bersama dengan Bea dan Cukai berhasil mengungkap peredaran sabu seberat 52,15 Kg dari tiga anggota jaringan sindikat narkotika, pada Kamis-Jumat (25-26/4), yaitu di Pelabuhan Buruh, Indragiri Hilir, Prov.Riau dan di Batam Kepualuan Riau. Pengungkapan ini berawal dari adanya informasi masyarakat bahwa di daerah pesisir timur pantai Sumatera, Provinsi Riau sering terjadi penyelundupan narkoba dengan menggunakan speed boat. Setelah dilakukan koordinasi dan penyelidikan bersama dengan Bea Cukai Dumai dan Bea Cukai Tembilahan, pada tanggal 25 April 2019 tim melihat sebuah kapal speed boat memberikan kode ke dermaga di Pelabuhan Buruh, Kab. Indragiri Hilir, Prov. Riau, dan di saat yang sama pula terlihat sebuah mobil yang diduga kuat akan menerima barang narkotika. Petugas pun mengamankan seorang tersangka berinisial MAN yang berada di dalam mobil tersebut.\nSetelah dilakukan pemeriksaan, tim bergerak ke pos dermaga buruh dan ditemukan tiga karung plastik berisi sabu seberat 52,15 Kg yang sudah diturunkan dari speed boat. Petugas kemudian berusaha untuk mengamankan para tersangka lainnya, namun mereka segera menaiki speed boat dan melarikan diri.\nNamun petugas tidak kenal menyerah dan terus melakukan pengembangan. Petugas mendapatkan informasi bahwa seorang pelaku terbang dari Jambi ke Batam. Selanjutnya, BNN berkoordinasi dengan Bea Cukai Jambi, Batam dan BNNP Kepualuan Riau untuk menangkap tersangka. Pada tanggal 26 April 2019, BNN akhirnya berhasil mengamankan FIR sesaat keluar dari Bandara Hang Nadim Batam. Kepada petugas, FIR mengaku dirinya membawa sabu 52,15 Kg dari Bengkalis. Dari keterangannya, FIR juga menyebutkan bahwa dirinya diperintahkan oleh seorang pria berinisial P, yang akhirnya bisa ditangkap di Perumahan Tiban McDermott, Kecamatan Sekupang, Batam, Kepulauan Riau.\nPara tersangka dikenakan pasal 114 ayat (2), Jo Pasal 132 ayat (1), Pasal 112 ayat (2), Jo Pasal 132 ayat (1), UU RI No.35 Tahun 2009 tentang narkotika dengan ancaman maksimal hukuman mati.\n <br/><br/>\nKasus Ketiga\nPenyelundupan narkotika jenis sabu seberat +10 Kg kembali berhasil digagalkan BNN. Penggagalan penyelundupan narkotika yang dilakukan oleh sindikat internasional tersebut terjadi pada hari Kamis, 11 April 2019 di Depan Hotel Megasari di Jl. Lintas Sumatera Kec.Kisaran Kab. Asahan Prov. Sumatera Utara.\nPangungkapan berawal dari adanya informasi dugaan transaksi narkotika di kawasan Jl.Lintas Sumatera Kisaran Sumatera Utara. Setelah dilakukan pemantauan, pada hari Rabu (11/4), petugas mengamankan dua tersangka berinisial U (pria/39th) dan RH (pria/29th). Dari tangan kedua pelaku, petugas menyita barang bukti shabu seberat +10 kg yang dikemas dalam bungkus plastik teh China berlapis lakban warna hitam yang dimasukkan dalam karung dan di letakkan dalam tumpukkan karung berisi getah karet di dalam sebuah truk.\nBerdasarkan keterangan tersangka U, ia mengaku diperintah oleh AM alias Yun (pria/37th) untuk mengambil barang bukti narkotika tersebut. Kemudian petugas pun melakukan penangkapan di rumah tempat tinggalnya di Ds.Meunasah Dayah, Kec.Tanah Jambo Aye Kab. Aceh Utara. Sementara itu, dari keterangan tersangka RH diketahui bahwa ia mendapat perintah dari seorang berinisial J yang saat ini masih dalam pencarian (DPO) untuk membawa Truk Mitsubshi Fuso yang berisi barang bukti narkotika tersebut dari Dumai ke Kisaran.\nPara tersangka kini di ancam Pasal 114 ayat (2) Junto Pasal 132 ayat (1) Subsider Pasal 112 ayat (2) Junto Pasal 132 ayat (1) Undang Undang Republik Indonesia Nomor 35 Tahun 2009 tentang Narkotika.\nBerdasarkan hasil tiga ungkap kasus di atas BNN menyita total 122,15 Kg sabu dan dengan demikian BNN telah menyelamatkan sekitar 610.750 jiwa dari penyalahgunaan Narkoba.\nHUMAS BNN\n\n', 'artikel.jpeg', '2021-06-19 01:26:08', NULL),
(2, 'Pencegahan Penyalahgunaan Napza', 'Penyalahgunaan Napza (Narkotika, Psikotropika, dan Zat-zat Adiktif) merupakan suatu pola perilaku yang bersifat patologik, dan biasanya dilakukan oleh individu yang mempunyai kepribadian rentan atau mempunyai resiko tinggi, dan jika dilakukan dalam jangka waktu tertentu akan menimbulkan gangguan bio-psiko-sosial-spiritual. \n<br/><br/>\nSifat Napza tersebut bersifat psikotropik dan psikoaktif yang mempunyai pengaruh terhadap sistem syaraf dan biasanya digunakan sebagai analgetika (pengurang rasa sakit) dan memberikan pengaruh pada aktifitas mental dan perilaku serta digunakan sebagai terapi gangguan psikiatrik pada dunia kedokteran. Obat-obatan ini termasuk dalam daftar obat G yang artinya dalam penggunaannya harus disertai dengan control dosis yang sangat ketat oleh dokter.Secara farmakologik, yang termasuk Napza antara lain ganja, morfin, sabu, ekstasi, marijuana, putau, kokain, pil koplo, dan sebagainya. Akan tetapi obat-obat pengurang rasa sakit yang dijual bebas mengandung Napza, dalam dosis yang telah diatur secara ketat.Beberapa jenis Napza terbuat dari tumbuhan koka yang dihasilkan hari hutan di Amerika Selatan, ada juga yang terbuat dari zat kimia seperti sabu, putau, morfin dan ekstasi. Ganja dihasilkan dari tanamanganja yang banyak dimasukkan dari daerah perbatasan Thailand, Birma dan Vietna sedangkan sabu diselundupkan dari Cina sedangkan ekstasi dari Belanda.Para pengguna Napza biasanya individu yang mempunyai masalah psikologis dan makepribadian yang rentan,serta mempunyai harga diri rendah. Tahapan individu dalam penyalahgunaan Napza dari tahap coba-coba, artinya individu sekedar ingin tahu dan merasakannya serta terpaksa menggunakannya karena mendapat tekanan dari teman-temannya.Faktor-faktor penyebab timbulnya penyalahgunaan Napzadapat berasal dari dalam diri individu dan dari luar diri individu. Faktor yang berasal dari dalam diri individu, seperti individu yang memiliki kepribadian beresiko tinggi, tidak dewasa, tidak sabaran, mempunyai toleransi frustasi yang rendah, tertutup, senang mengambil resiko yang berlebihan dan mempunyai kepercayaan diri yang rendah. Faktor yang berasal dari luar individu seperti lingkungan keluarga yang tidak sakinah, lingkungan sekolah yang tidak memadai, lingkungan masyarakat dan nilai obat-zat.Ada beberapa langkah pencegahan dan penanggulangannya antara lain:\n<br/><br/>\n1. Program InformasiDalam hal memberikan informasi sebaiknya dilakukan secara hati-hati, dan menghindari informasi yang sifatnya sensasional dan ambisius, karena dalam hal ini justru akan menarik bagi mereka untuk menguji kebenarannya dan merangsang keberaniannya. Teknik menakut-nakuti dari segi fisik, psikologis, sosial dan hukum hanya efektif dalam keadaan sangat terbatas.2. Program Pendidikan EfektifPada program ini bertujuan untuk pengembangan kepribadian pendewasaan pribadi meningkatkan kemampuan dalam mengambil keputusan yang bijak, mengatasi tekanan mental secara efektif, meningkatkan kepercayaan diri, menghilangkan gambaran negatif mengenai diri sendiri dan meningkatkan kemampuan komunikasi. Hasil pendidikan ini dapat berupa pengenalan tentang diri, perilaku asertif, berfikir positif, dan pemecahan masalah secara efektif.3. Program Penyediaan Pilihan Yang BermaknaKonsep ini bertujuan untuk mengalihkan penggunaan zat adiktif pada pilihan lain yang diharapkan dapat memberikan kepuasaan bagi kebutuhan manusiawi yang mendasar yaitu bio-psiko-sosial-spiritual.Kebutuhan yang dimaksud antara lain ingin tau kebutuhan mengalami hal-hal baru dalam hidupnya, kebutuhan terbentuknya identitas diri, kebutuhan akan bebas berfikirdan berbuat, kebutuhan akan penghargaan, kebutuhan untuk mengaktualisasikan diri serta kebutuhan diri serta kebutuhan diri diterima dalam kelompok.4.\n<br/><br/>\n Pengenalan Diri dan Intervensi DiniMengenal dengan baik cirri-ciri anak yang mempunyai resiko tinggi untuk menggunakan Napza merupakan suatu langkah yang bijaksana, baik yang berada dalam taraf coba-coba, iseng, pemakai tetap maupun yang telah ketinggalan, kemudian segera memberikan dukungan moril dan penanganan,apabila anak mengalami atau mengghadapi masa krisis dalam hidupnya. Dalam hal ini kerjasama antara orang tua, guru serta masyarakat sangat penting jika tidak teratasi segera dirujuk ke tenaga ahli psikolog maupun psikiater.5. Program Pelatihan Ketrampilan PsikososialProgram latihan ini diterapkan atas dasar teori belajar, yang mengatakan bahwa gangguan penyalahgunaan Napza merupakan perilaku yang dipelajari individu dalam lingkup pergaulan sosialnya.Perilaku ini mempunyai maksud dan arti tertentu bagi yang bersangkutan.Dalam pelatihan ini terdiri dari dua golongan yaitu,pertama Psychological Inoculation dalam pelatihan ini diputar film yang memperlihatkan bagaimana remaja mendapatkan tekanan dari pergaulannya, kemudian dalam hal ini dikembangkan sikap remaja untuk menentang dorongan dan tekanan tersebut.Kedua Personal and Social Skill training kepada remaja dikembangkan suatu ketrampilan dalam menghadapi problema hidup umum termasuk merokok dan penyalahgunaan Napza. Ketrampilan ini mengajarkan kepada remaja agar mampu mengatakan tidak, serta mengembangkan keberanian dan ketrampilan untuk mengekspresikan kebenaran, sehingga remaja terbebas dari bujukan atau tekanan kelompoknya. ( EN)', 'dua.jpg', '2021-06-19 01:26:08', NULL),
(3, 'Pengertian Narkoba Dan Bahaya Narkoba Bagi Kesehatan', 'Saat ini bahaya dan dampak narkoba atau narkotika dan obat-obatan pada kehidupan dan kesehatan pecandu dan keluarganya semakin meresahkan.<br/><br/>\nBagai dua sisi mata uang narkoba menjadi zat yang bisa memberikan manfaat dan juga merusak kesehatan. Seperti yang sudah diketahui, ada beberapa jenis obat-obatan yang termasuk ke dalam jenis narkoba yang digunakan untuk proses penyembuhan karena efeknya yang bisa menenangkan. Namun jika dipakai dalam dosis yang berlebih, bisa menyebabkan kecanduan. Penyalahgunaan ini mulanya karena si pemakai merasakan efek yang menyenangkan.\nDari sinilah muncul keinginan untuk terus menggunakan agar bisa mendapatkan ketenangan yang bersifat halusinasi.<br/><br/> Meski dampak narkoba sudah diketahui oleh banyak orang, tetap saja tidak mengurangi jumlah pemakainya.\nBahaya narkoba hingga menjadi kecanduan tersebut memang bisa disembuhkan, namun akan lebih baik jika berhenti menggunakannya sesegera mungkin atau tidak memakai sama sekali.\nPengertian Narkoba (Narkotika dan Obat-obatan)\nNarkotika adalah zat atau obat baik yang bersifat alamiah, sintetis, maupun semi sintetis yang menimbulkan efek penurunan kesadaran, halusinasi, serta daya rangsang.<br/><br/>\nSementara menurut UU Narkotika pasal 1 ayat 1 menyatakan bahwa narkotika merupakan zat buatan atau pun yang berasal dari tanaman yang memberikan efek halusinasi, menurunnya kesadaran, serta menyebabkan kecanduan.\nObat-obatan tersebut dapat menimbulkan kecanduan jika pemakaiannya berlebihan. Pemanfaatan dari zat-zat itu adalah sebagai obat penghilang nyeri serta memberikan ketenangan. Penyalahgunaannya bisa terkena sanksi hukum. Untuk mengetahui apa saja jenis dan bahaya narkoba bagi kesehatan, simak ulasannya berikut ini.\nJenis-jenis Narkoba (Narkotika dan Obat-obatan)\nKandungan yang terdapat pada narkoba tersebut memang bisa memberikan dampak yang buruk bagi kesehatan jika disalahgunakan. Menurut UU tentang Narkotika, jenisnya dibagi menjadi menjadi 3 golongan berdasarkan pada risiko ketergantungan.<br/><br/>\nNarkotika Golongan 1\nNarkotika golongan 1 seperti ganja, opium, dan tanaman koka sangat berbahaya jika dikonsumsi karena beresiko tinggi menimbulkan efek kecanduan.\nNarkotika Golongan 2\nSementara narkotika golongan 2 bisa dimanfaatkan untuk pengobatan asalkan sesuai dengan resep dokter. Jenis dari golongan ini kurang lebih ada 85 jenis, beberapa diantaranya seperti Morfin, Alfaprodina, dan lain-lain. Golongan 2 juga berpotensi tinggi menimbulkan ketergantungan.<br/><br/>\nNarkotika Golongan 3\nDan yang terakhir, narkotika golongan 3 memiliki risiko ketergantungan yang cukup ringan dan banyak dimanfaatkan untuk pengobatan serta terapi.\nSeperti yang sudah disebutkan di atas, ada beberapa jenis narkoba yang bisa didapatkan secara alami namun ada juga yang dibuat melalui proses kimia. Jika berdasarkan pada bahan pembuatnya, jenis-jenis narkotika tersebut di antaranya adalah:\nNarkotika Jenis Sintetis\nJenis yang satu ini didapatkan dari proses pengolahan yang rumit. Golongan ini sering dimanfaatkan untuk keperluan pengobatan dan juga penelitian. Contoh dari narkotika yang bersifat sintetis seperti Amfetamin, Metadon, Deksamfetamin, dan sebagainya.\nNarkotika Jenis Semi Sintetis\nPengolahan menggunakan bahan utama berupa narkotika alami yang kemudian diisolasi dengan cara diekstraksi atau memakai proses lainnya. Contohnya adalah Morfin, Heroin, Kodein, dan lain-lain.<br/><br/>\nNarkotika Jenis Alami\nGanja dan Koka menjadi contoh dari Narkotika yang bersifat alami dan langsung bisa digunakan melalui proses sederhana. Karena kandungannya yang masih kuat, zat tersebut tidak diperbolehkan untuk dijadikan obat. Bahaya narkoba ini sangat tinggi dan bisa menyebabkan dampak buruk bagi kesehatan jika disalahgunakan. Salah satu akibat fatalnya adalah kematian.\nBahaya dan Dampak Narkoba pada Hidup dan Kesehatan\nPeredaran dan dampak narkoba saat ini sudah sangat meresahkan. Mudahnya mendapat bahan berbahaya tersebut membuat penggunanya semakin meningkat. Tak kenal jenis kelamin dan usia, semua orang berisiko mengalami kecanduan jika sudah mencicipi zat berbahaya ini.<br/><br/>\nMeski ada beberapa jenis yang diperbolehkan dipakai untuk keperluan pengobatan, namun tetap saja harus mendapatkan pengawasan ketat dari dokter. Ada banyak bahaya narkoba bagi hidup dan kesehatan, di antaranya adalah:\nDehidrasi\nPenyalahgunaan zat tersebut bisa menyebabkan keseimbangan elektrolit berkurang. Akibatnya badan kekurangan cairan. Jika efek ini terus terjadi, tubuh akan kejang-kejang, muncul halusinasi, perilaku lebih agresif, dan rasa sesak pada bagian dada. Jangka panjang dari dampak dehidrasi ini dapat menyebabkan kerusakan pada otak.\nHalusinasi\nHalusinasi menjadi salah satu efek yang sering dialami oleh pengguna narkoba seperti ganja. Tidak hanya itu saja, dalam dosis berlebih juga bisa menyebabkan muntah, mual, rasa takut yang berlebih, serta gangguan kecemasan. Apabila pemakaian berlangsung lama, bisa mengakibatkan dampak yang lebih buruk seperti gangguan mental, depresi, serta kecemasan terus-menerus.\nMenurunnya Tingkat Kesadaran\nPemakai yang menggunakan obat-obatan tersebut dalam dosis yang berlebih, efeknya justru membuat tubuh terlalu rileks sehingga kesadaran berkurang drastis. Beberapa kasus si pemakai tidur terus dan tidak bangun-bangun. Hilangnya kesadaran tersebut membuat koordinasi tubuh terganggu, sering bingung, dan terjadi perubahan perilaku. Dampak narkoba yang cukup berisiko tinggi adalah hilangnya ingatan sehingga sulit mengenali lingkungan sekitar.\nKematian\nDampak narkoba yang paling buruk terjadi jika si pemakai menggunakan obat-obatan tersebut dalam dosis yang tinggi atau yang dikenal dengan overdosis. Pemakaian sabu-sabu, opium, dan kokain bisa menyebabkan tubuh kejang-kejang dan jika dibiarkan dapat menimbulkan kematian. Inilah akibat fatal yang harus dihadapi jika sampai kecanduan narkotika, nyawa menjadi taruhannya.\nGangguan Kualitas Hidup\nBahaya narkoba bukan hanya berdampak buruk bagi kondisi tubuh, penggunaan obat-obatan tersebut juga bisa mempengaruhi kualitas hidup misalnya susah berkonsentrasi saat bekerja, mengalami masalah keuangan, hingga harus berurusan dengan pihak kepolisian jika terbukti melanggar hukum.\nPemakaian zat-zat narkotika hanya diperbolehkan untuk kepentingan medis sesuai dengan pengawasan dokter dan juga untuk keperluan penelitian. Selebihnya, obat-obatan tersebut tidak memberikan dampak positif bagi tubuh. Yang ada, kualitas hidup menjadi terganggu, relasi dengan keluarga kacau, kesehatan menurun, dan yang paling buruk adalah menyebabkan kematian. Karena itu, jangan coba-coba memakai barang berbahaya tersebut karena resikonya sangat tinggi bagi hidup dan kesehatan.\n\n', 'narkoba.jpg', '2021-06-19 01:26:08', NULL),
(4, 'Apa Itu Psikotropika Dan Bahayanya ', 'Penggunaan obat-obatan berbahaya saat ini mulai disalahartikan. <br/><br/>Beberapa jenis zat yang mampu merangsang syaraf pusat justru sering dipakai secara sembarangan tanpa resep yang tepat. Efek halusinasi dan juga ketenangan yang diberikan obat tersebut disalahgunakan sebagai zat untuk menghilangkan depresi dan juga kesedihan. <br/><br/>Jenis zat yang mampu memberikan efek halusinasi dan gangguan berpikir penggunanya dikenal dengan nama psikotropika. Obat tersebut bukanlah sejenis narkoba, namun efeknya juga bisa menyebabkan kecanduan yang berakhr dengan kematian. Untuk mengetahui lebih jelas tentang definisi dan bahayanya, simak ulasan singkatnya dibawah ini.<br/><br/>\nPengertian Psikotropika\nPsikotropika adalah zat atau obat yang bekerja menurunkan fungsi otak serta merangsang susuan syaraf pusat sehingga menimbulkan reaksi berupa halusinasi, ilusi, gangguan cara berpikir, perubahan perasaan yang tiba-tiba, dan menimbulkan rasa kecanduan pada pemakainya. Jenis obat-obatan ini bisa ditemukan dengan mudah di apotik, hanya saja penggunaannya harus sesuai dengan resep dokter. Efek kecanduan yang diberikan pun memiliki kadar yang berbeda-beda, mulai dari berpotensi tinggi menimbulkan ketergantungan hingga ringan.<br/><br/>\nBanyak pengguna yang mengkonsumsi obat-obatan tersebut tanpa ijin dari dokter. Meski efek kecanduan yang diberikan termasuk rendah, namun tetap saja bisa berbahaya bagi kesehatan. Data menunjukkan sebagian besar pemakai yang sudah mengalami kecanduan, dimulai dari kepuasan yang didapatkan usai mengkonsumsi zat tersebut yang berupa perasaan senang dan tenang. Lama-kelamaan pemakaian mulai ditingkatkan sehingga menyebabkan ketergantungan. Jika sudah mencapai level parah, bisa mengakibatkan kematian. <br/><br/>Penyalahgunaan dari obat-obatan tersebut juga bisa terancam terkena hukuman penjara. Karena itulah, meski beberapa manfaatnya sangat baik bagi kesehatan, namun jika berlebih dan tidak sesuai dengan anjuran dokter bisa menyebabkan efek yang berbahaya.<br/><br/>\nGolongan Psikotropika\nApakah Anda pernah mendengar zat Amfetamin? Ya, salah satu jenis obat-obatan tersebut nyatanya termasuk dalam jenis psikotropika. Penggunaannya harus sesuai dengan resep dokter agar bisa terhindar dari kecanduan. Efek menenangkan dan memberikan rasa bahagia membuat beberapa orang sengaja menyalahgunakan zat tersebut. Padahal pemakaiannya tidak boleh sembarangan karena termasuk dalam obat terlarang. <br/><br/>Berdasarkan pada risiko kecanduan yang dihasilkan, golongan psikotropika dibagi menjadi 4, diantaranya adalah:<br/><br/>\nPsikotropika Golongan 1\nObat-obatan yang termasuk dalam golongan ini memiliki potensi yang tinggi menyebabkan kecanduan. Tidak hanya itu, zat tersebut juga termasuk dalam obat-obatan terlarang yang penyalahgunaannya bisa dikenai sanksi hukum. Jenis obat ini tidak untuk pengobatan, melainkan hanya sebagai pengetahuan saja. Contoh dari psikotropika golongan 1 diantaranya adalah LSD, DOM, Ekstasi, dan lain-lain yang secara keseluruhan jumlahnya ada 14. Pemakaian zat tersebut memberikan efek halusinasi bagi penggunanya serta merubah perasaan secara drastis. Efek buruk dari penyalahgunaannya bisa menimbulkan kecanduan yang mengarah pada kematian jika sudah mencapai level parah.<br/><br/>\nPsikotropika Golongan 2\nGolongan 2 juga memiliki risiko ketergantungan yang cukup tinggi meski tidak separah golongan 1. Pemakaian obat-obatan ini sering dimanfaatkan untuk menyembuhkan berbagai penyakit. Penggunaannya haruslah sesuai dengan resep dokter agar tidak memberikan efek kecanduan. Golongan 2 ini termasuk jenis obat-obatan yang paling sering disalahgunakan oleh pemakaianya, misalnya adalah Sabu atau Metamfeamin, Amfetamin, Fenetilin, dan zat lainnya yang total jumlahnya ada 14.<br/><br/>\nPsikotropika Golongan 3\nGolongan 3 memberikan efek kecanduan yang terhitung sedang. Namun begitu, penggunaannya haruslah sesuai dengan resep dokter agar tidak membahayakan kesehatan. Jika dipakai dengan dosis berlebih, kerja sistem juga akan menurun secara drastis. Pada akhirnya, tubuh tidak bisa terjaga dan tidur terus sampai tidak bangun-bangun. Penyalahgunaan obat-obatan golongan ini juga bisa menyebabkan kematian. Contoh dari zat golongan 3 diantaranya adalah Mogadon, Brupronorfina, Amorbarbital, dan lain-lain yang jumlah totalnya ada 9 jenis.<br/><br/>\nPsikotropika Golongan 4\nGolongan 4 memang memiliki risiko kecanduan yang kecil dibandingkan dengan yang lain. Namun tetap saja jika pemakaiannya tidak mendapat pengawasan dokter, bisa menimbulkan efek samping yang berbahaya termasuk kematian. Penyalahgunaan obat-obatan pada golongan 4 terbilang cukup tinggi. Beberapa diantaranya bahkan bisa dengan mudah ditemukan dan sering dikonsumsi sembarangan. Adapun contoh dari golongan 4 diantaranya adalah Lexotan, Pil Koplo, Sedativa atau obat penenang, Hipnotika atau obat tidur, Diazepam, Nitrazepam, dan masih banyak zat lainnya yang totalnya ada 60 jenis.\nBahaya dan Efek Psikotropika\nMeski memberikan efek kecanduan, namun penggunaan zat-zat tersebut diperbolehkan asalkan sesuai dengan resep dokter. Namun sayang, saat ini pemakaiannya justru berlebih dan melewati dosis normal sehingga manfaat yang diberikan justru memberikan dampak buruk bagi kesehatan. Ada banyak bahaya dan efek penyalahguaan psikotropika, beberapa diantaranya adalah:\nStimulan\nFungsi tubuh akan bekerja lebih tinggi dan bergairah sehingga pemakainya lebih terjaga. Kerja organ tentu menjadi berat dan jika si pemakai tidak menggunakan obat-obatan tersebut, badan menjadi lemah. Efek kecanduan ini menyebabkan penggunanya harus selalu mengkonsumsi zat tersebut agar kondisi tubuh tetap prima. Contoh stimulan yang sering disalahgunakan adalah ekstasi dan sabu-sabu.\nHalusinogen\nIni adalah efek yang sering dialami oleh pemakai dimana persepsinya menjadi berubah dan merasakan halusinasi yang berelebihan. Contoh zat yang memberikan efek halusinogen salah satunya adalah ganja.\nDepresan\nEfek tenang yang dihasilkan disebabkan karena zat tersebut menekan kerja sisten syaraf pusat. Jika digunakan secara berlebihan, penggunanya bisa tertidur terlalu lama dan tidak sadarkan diri. Bahaya yang paling fatal adalah menyebabkan kematian. Contoh zat yang bersifat depresan salah satunya adalah putaw.\nUndang-undang Narkotika dan Psikotropika\nPsikotropika tidak sama dengan Narkotika, hal tersebut sesuai dengan isi pasal 1 angka 1 UU No.5 tahun 1997 tentang Psikotropika yang menyatakan bahwa Psikotropika merupakan sebuah zat atau obat baik yang bersifat alamiah maupun buatan yang bukan narkotika. Khasiatnya bersifat psikoaktif yang mana menyebabkan perubahan aktivitas mental serta perilaku.\nSementara pada Undang-Undang Nomor 35 Tahun 2009 tentang Narkotika menyatakan bahwa jenis psikotropika golongan 1 dan 2 dicabut dan ditetapkan sebagai narkotika golongan 1.\n\n', 'Psikotropika.jpg', '2021-06-19 01:26:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `jenis_kategori` varchar(50) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `jenis_kategori`, `golongan`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(2, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(3, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(4, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(5, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(6, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(7, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(8, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(9, 'psikotrapika', '2', '2021-06-17 23:15:58', NULL, NULL),
(10, 'psikotrapika', '2', '2021-06-17 23:15:58', NULL, NULL),
(11, 'psikotrapika', '2', '2021-06-17 23:15:58', NULL, NULL),
(12, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(13, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(14, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(15, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(16, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(17, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(18, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(19, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(20, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(21, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(22, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(23, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(24, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(25, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(26, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(27, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(28, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(29, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(30, 'narkotika', '1', '2021-06-17 23:15:58', NULL, NULL),
(31, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(32, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(33, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(34, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(35, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(36, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(37, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(38, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(39, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(40, 'zat adiktif', '3', '2021-06-17 23:15:58', NULL, NULL),
(41, 'yat', '5', '2021-06-16 17:00:00', '2021-06-16 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_06_19_095102_add_deleted_at_to_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) NOT NULL,
  `nama_narkoba` char(20) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `epek_gejala` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `nama_narkoba`, `id_kategori`, `deskripsi`, `gambar`, `epek_gejala`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ganja', 1, 'Ganja atau beberapa daerah menyebutnya kanabis, cimeng atau mariyuana merupakan zat narkotika yang berasal dari jenis tumbuhan Cannabis sativa. Peran tumbuhan ini memiliki sisi positif yang dapat dimanfaatkan sebagai pembuatan kantong di bagian seratnya dan menghasilkan minyak di bagian bijinya. Sisi negatifnya adalah dapat memberikan fantasi, euforia atau rasa senang berlebihan, dan dapat merusak fungsi otak, jantung, dan mental.\nGanja juga memiliki sifat adiktif sehingga ketika sekali menggunakan, akan ada rasa candu. Dan buruknya terdapat efek samping jika pengguna berhenti menggunakan zat ini, pengguna akan merasakan sakit kepala, mual menerus, merasa kelelahan dan lesu. Ganja dikonsumsi dengan berbagai cara seperti dipadatkan menyerupai rokok yang dilinting sebagai pengganti tembakau atau dimasukkan kedalam pipa.\n', 'ganja.jpg', '1 Denyut jantung atau nadi lebih cepat. <br/>2 Mulut dan tenggorokan kering. <br/>3 Merasa lebih santai, banyak bicara dan bergembira. <br/>4 Sulit mengingat sesuatu kejadian. <br/>5 Kesulitan kinerja yang membutuhkan konsentrasi, reaksi yang cepat dan koordinasi. <br/>6 Kadang-kadang menjadi agresif bahkan kekerasan. <br/>7 Bilamana pemakaian dihentikan dapat diikuti dengan sakit kepala, mual yang berkepanjangan, rasa letih/capek. <br/>8 Gangguan kebiasaan tidur. <br/>9 Sensitif dan gelisah. <br/>10 Berkeringat. <br/>11 Berfantasi. <br/>12 Selera makan bertambah.', '2021-06-20 02:30:51', NULL, NULL),
(2, 'heroin', 9, '<b>Heroin</b>, atau sering juga disebut putaw, bedak, atau etep merupakan olahan dari morfin secara kimiawi. Secara fisik heroin berbentuk bubuk atau pil dengan cara konsumsinya perlu dihancurkan hingga halus menjadi bubuk dan dapat langsung dipakai dengan cara dihisap atau disuntikkan ke pembuluh darah atau otot.\r\nHeroin dapat memanjakan pengguna dengan efek euforia atau kegembiraan tinggi ketika zat ini diterima di otak, dan bahayanya juga terletak langsung kepada otak, Heroin dapat menyebabkan gangguan otak permanen, dan efek penggunaan skala menerus dapat menyebabkan perubahan fisik dan psikis.\r\nDari fisik diantaranya mulut kering, suka gatal, denyut jantung lambat, otot lemas, pupil mengecil, sedangkan dari psikisnya yaitu suka tidur, mudah stress, gangguan berbicara, suka menyendiri, hingga memiliki kecenderungan untuk bertindak criminal.', '5d15d338a49f8heroin.jpg', '1 <i></i>Timbul <i></i>rasa kesibukan yang sangat cepat/rushing sensastion (ï¿½ 30-60 detik) diikuti rasa menyenangkan seperti mimpi yang penuh kedamaian dan kepuasan atau ketenangan hati (euforia). Ingin selalu menyendiri untuk menikmatinya. <br>2 Denyut nadi melambat. <br>3 Tekanan darah menurun. <br>4 Otot-otot menjadi lemas/relaks. <br>5 Diafragma mata (pupil) mengecil (pin point). <br>6 Mengurangi bahkan menghilangkan kepercayaan diri. <br>7 Membentuk dunia sendiri (dissosial) : tidak bersahabat. <br>8 Penyimpangan perilaku : berbohong, menipu, mencuri, kriminal. <br>9 Ketergantungan dapat terjadi dalam beberapa hari. <br>10 Efek samping timbul kesulitan dorongan seksual, kesulitan membuang hajat besar, jantung berdebar-debar, kemerahan dan gatal di sekitar hidung, timbul gangguan kebiasaan tidur.', '2021-06-20 02:30:51', NULL, NULL),
(3, 'sabu', 3, 'Sabu-sabu, atau memiliki nama lain meth, kapur, Kristal, dan nama senyawa kimianya metamfetamin ini merupakan zat psikotropika yang sering dijumpai di Indonesia. Dari kenampakan fisiknya, sabu-sabu berwarna putih, berbentuk bubuk, kristal, atau cair jika ditambah dengan air, tidak berbau, dan berasa pahit. Sabu-sabu memiliki fungsi medis yang penting yaitu berperan dalam mengobati penyakit tingkat tinggi seperti gangguan hiperaktif, kekurangan perhatian atau narkolepsi. \nNamun perlu diperhatikan bahwa zat ini mengandung dopamine yang dapat memberikan efek rasa senang dan bersemangat pada pengguna. Jika digunakan kontinyu, maka dapat menyebabkan sulit tidur atau insomnia, depresi, nafsu makan menurun, suhu tubuh meningkat beserta tekanan darah dan detak jantung, hingga dapat menyebabkan disfungsi otak yang berlanjut kepada struk. Cara mengkonsumsinya bermacam-macam, dengan rokok, dihisap, dan disuntikkan.\n', 'sabu.jpg', 'EPEK - EPEK JANGKA PENDEK<br/>    <br/>1. Kehilangan nafsu makan<br/>2. peningkatan denyut jantung, tekanan darah dan suhu pada tubuh<br/>3. pola tidur yang terganggu<br/>4. Bersikap aneh, tidak terduga, terkadang bertindak keras atau kejam<br/>5. Halusinasi, gembira yang berlebihan, sifat lekas marah<br/>6. Dosis yang berlebihan dapat berakibatkan kejang - kejang dan keatian.                              <br/>EPEK - EPEK JANGKA PANJANG <br/><br/>1. Kerusakan permanen pada pembuluh darah di jantung dan di otak,tekanan darah tinggi, berakibatkan serangan jantung, stroke dan kematian<br/>2. Kerusakan pada lever (hati), ginjal dan paru-paru.<br/>3.Kerusakan jaringan dalam hidung, bila di hirup.<br/>4. Masalah pernafasan bla di hisap seperti rokok.<br/>5.Penyakit-penyakit menular dan peradangan, bila di suntikan.', '2021-06-20 02:30:51', NULL, NULL),
(4, 'morfin', 4, 'Morfin, berasal dari kata morpheous atau yang berarti dewa mimpi merupakan getah opium yang dicampur dan diolah dengan zat kimia tertentu. Penggunaan sebenernya dalam dunia kedokteran adalah morfin ini digunakan sebagai obat bius atau penghilang rasa sakit dengan cara disuntikkan ke otot atau ke pembuluh darah yang bekerja langsung pada sistem saraf.\nJika digunakan secara tidak benar, maka morfin dapat memberikan efek buruk kepada mental menjadi orang yang anti sosial, tidak ingin berinteraksi, membuat dunianya sendiri, menganggap lingkungannya adalah musuh, hingga tidak percaya diri. Sedangkan dari sisi fisik dapat menyebabkan rasa gelisah, jantung berdebar-debar, rasa kantuk, penglihatan kabur, pingsan, hingga impotensi. Tingkat adiktif pada zat ini memiliki ketergantungan yang sangat tinggi.\n', 'morfin.jpg', '1 Menimbulkan euforia. <br/>2 Mual, muntah, sulit buang hajat besar (konstipasi). <br/>3 Kebingungan (konfusi). <br/>4 Berkeringat. <br/>5 Dapat menyebabkan pingsan, jantung berdebar-debar. <br/>6 Gelisah dan perubahan suasana hati. <br/>7 Mulut kering dan warna muka berubah.', '2021-06-20 02:30:51', NULL, NULL),
(5, 'Kokain', 5, 'Kokain, atau disebut juga coke, koka, charlie, srepet, happy dust, snow berasal dari spesies tumbuhan Erythroxylon coca yang tumbuh di Amerika Selatan. Tumbuhan ini tidak semerta dikonsumsi, namun dicampurkan dengan zat kimia tertentu yang dapat memicu atau menghancurkan metabolisme sel menjadi berkali lipat lebih cepat.\nKokain memiliki kegunaan sebagai anestetik lokal yang berfungsi untuk menutup pembuluh darah yang biasanya digunakan ketika pembedahan. Kokain memiliki dua jenis yaitu kokain hidroklorida dan kokain free base.\nPenggunaan berlebihan dapat menyebabkan emfisema, mengalami paranoid, rabun penglihatan, sering merasa kelebihan dan dapat memberikan efek euforia. Cara penggunaannya dapat dibakar bersamaan dengan tembakau (seperti rokok) atau dihirup dengan alat bantu maupun langsung.\n', 'kokain.jpg', '1.	Dapat memberikan efek kegembiraan yang berlebihan bagi si pengguna<br/>2.	Sering merasa gelisah<br/>3.	Menurunnya berat badan <br/>4.	Timbul masalah pada kulit<br/>5.	Mengalami gangguan pernafasan<br/>6.	Sering kejang-kejang<br/>7.	Sering mengeluarkan dahak<br/>8.	Mengalami emfisema ( kerusakan pada paru-paru)<br/>9.	Turunnya selera makan<br/>10.	Mengalami paranoid <br/>11.	Mengalami gangguan penglihatan<br/>12.	Sering merasa kebingungan', '2021-06-20 02:30:51', NULL, NULL),
(6, 'LSD', 6, 'Orang mengenalnya sebagai LSD atau bahasa indonesianya dalam tatanan senyawa kimia adalah asam lisergat dietilamida. LSD berasal dari ergot, ergot sendiri adalah biji – bijian gandum yang terkena jamur. LSD memiliki peran positif dalam bidang kedokteran untuk penggunaan psikiatrik sebagai jalan keluar untuk mengobati masalah psikologi.\nLSD juga punya pengaruh lain seperti memberikan kesenangan, ketenangan atau meditasi. Sayangnya pengaruh ini disalahgunakan. Dampak dari penyalahgunaan obat ini terletak pada efek sampingnya yaitu tripping. Tripping adalah efek samping yang memaksakan adanya perubahan energi yang meningkat namun akan sulit tidur.Efek samping lainnya adalah berhalusinasi, mudah putus ada, dan rasa takut meningkat. Penggunaan LSD dengan cara cair maupun padat dalam bentuk tablet, gelatin, dan kapsul\n', 'lsd.jpg', '•	Sering berhalusinasi mengenai berbagai kejadian, tempat, warna, dan waktu <br/>•	2.Sering terobsesi dengan apa yang ada dalam halusinasinya<br/>•	Sering juga mengalami paranoid akibat hal-hal yang dihalusinasikannya <br/>•	Denyut jantung dan tekanan darahnya meningkat <br/>•	Diafragma mata melebar <br/>•	Mengalami demam <br/>•	Sering depresi dan merasa pusing <br/>•	Memiliki rasa panik dan takut yang berlebihan <br/>•	Mengalami gangguan persepsi.', '2021-06-20 02:30:51', NULL, NULL),
(7, 'Opium', 7, 'Opium atau opiat memiliki nama lain aoiun, candu, dan poppy ini berasalkan dari tumbuhan berjenis Papaver sumniferum yang belum matang. Tumbuhan candu ini dapat ditanam pada kondisi iklim subtropics. Tanaman ini memiliki fungsi positif mulai dari bidang kedokteran yang sebagai penghilang rasa sakit hingga dapat dijadikan sebagai tanaman hias karena merupakan tumbuhan yang cantik.\nNamun bahayanya adalah ketika penggunaannya berlebih dapat merusak fungsi badan itu sendiri, misal sering merasa pusing, kulit menjadi bermasalah, hingga efek psikis seperti memiliki semangat yang tinggi, merasa sibuk sendiri (rishing sensation), dan nafsu meningkat. Penggunaan zat adiktif ini dengan cara dihisap atau inhalasi.\n\n\n', 'opium.jpg', '1 Menimbulkan rasa kesibukan (rushing sensation) <br/>2 Menimbulkan semangat <br/>3 Merasa waktu berjalan lambat. <br/>4 Pusing, kehilangan keseimbangan/mabuk. <br/>5 Merasa rangsang birahi meningkat (hambatan seksual hilang). <br/>6 Timbul masalah kulit di sekitar mulut dan hidung', '2021-06-20 02:30:51', NULL, NULL),
(8, 'Kodein', 8, 'Kodein, yang berasal dari unsur senyawa kimia methylmorphine adalah asam opiat yang diproses dengan morfin melalui metilasi. Zat ini sejatinya adalah zat pengobatan yang populer dikalangan dunia kedokteran yang digunakan untuk meredakan penyakit ringan seperti contoh batuk.\nKetika morfin ini dicerna dalam sistem pencernaan, kodein akan dimusnahkan melalui usus halus, yang dapat ditafsirkan sesungguhnya kodein tidak dapat mempengaruhi tubuh karena belum mencapai darah.\nNamun itu merupakan tafsir yang salah karena tetap ada efek samping penggunaan berkelanjutan seperti disfungsi organ pernafasan. analgesia, sedasi, dan efek adiktif atau ketagihan karena ketergantungan. Kodein berupa dalam bentuk padatan seperti pil atau dalam bentuk cairan dan digunakan dengan cara dihisap.\n\n', 'kodein.jpg', '<br/>1. Mengalami euforia    <br/>2. Sering mengalami gatal-gatal<br/>3. mengalami mual dan muntah<br/>4. Mudah ngantuk<br/>5. Mulut terasa kering.<br/>6. Mengalami hipotensi<br/>7. Sering sembelit<br/>8. Mengalami defresi sasluran pernafasan.                                             ', '2021-06-20 02:30:51', NULL, NULL),
(9, 'Ekstasi', 9, 'Ekstasi atau nama lain inex dan MDMA merupakan unsur senyawa kimia Metilendioksi-metamfetamina. Ekstasi suka digunakan dikarenakan menyebabkan tingkat aktif yang sangat tinggi, aktif yang dimaksud disini adalah tinggi pada kepekaan rangsangan. Tingkat aktif yang tinggi ini membuat halusinasi atau berfantasi.\nEfek psikis lainnya yang dapat dirasakan seperti bahagia atau euforia yang tinggi hingga dapat meningkatkan rasa cinta juga, sehingga penggunaan zat adiktif ini di latar belakangi dengan ketika dalam kondisi bersenang-senang.\nEfek samping dari kesehatan sendiri dapat mengganggu beberapa fungsi organ seperti mual, detak jantung tinggi, pusing hingga pingsan, dan menyebabkan disfungsi otak. Ekstasi dikonsumsi dalam bentuk padatan seperti tablet dan pil hingga lepasan seperti bubuk.\n', 'extensi.jpg', 'EPEK - EPEK JANGKA PENDEK<br/> <br/>Menurunnya nafsu makan <br/>Insomnia <br/>Pusing dan demam <br/>Kram otot <br/>Tremor <br/>Berkeringat dingin <br/>Penglihatan buram <br/>Meningkatnya denyut jantung <br/>Tekanan darah meningkat <br/>Menegangnya mulut, wajah dan dagu<br/> EPEK - EPEK JANGKA PANJANG<br/>Meningkatkan kecanduan<br/>Serangan panik<br/>Insomnia<br/>Linglung<br/>Tidak mampu membedakan <br/>realita dan fantasi<br/>Delusi paranoid<br/>Depresi', '2021-06-20 02:30:51', NULL, NULL),
(10, 'sabu-sabu', 10, 'Sabu-sabu, atau memiliki nama lain meth, kapur, Kristal, dan nama senyawa kimianya metamfetamin ini merupakan zat psikotropika yang sering dijumpai di Indonesia. Dari kenampakan fisiknya, sabu-sabu berwarna putih, berbentuk bubuk, kristal, atau cair jika ditambah dengan air, tidak berbau, dan berasa pahit. Sabu-sabu memiliki fungsi medis yang penting yaitu berperan dalam mengobati penyakit tingkat tinggi seperti gangguan hiperaktif, kekurangan perhatian atau narkolepsi. \nNamun perlu diperhatikan bahwa zat ini mengandung dopamine yang dapat memberikan efek rasa senang dan bersemangat pada pengguna. Jika digunakan kontinyu, maka dapat menyebabkan sulit tidur atau insomnia, depresi, nafsu makan menurun, suhu tubuh meningkat beserta tekanan darah dan detak jantung, hingga dapat menyebabkan disfungsi otak yang berlanjut kepada struk. Cara mengkonsumsinya bermacam-macam, dengan rokok, dihisap, dan disuntikkan.\n', 'sabu.jpg', 'EPEK - EPEK JANGKA PENDEK<br/>    <br/>1. Kehilangan nafsu makan<br/>2. peningkatan denyut jantung, tekanan darah dan suhu pada tubuh<br/>3. pola tidur yang terganggu<br/>4. Bersikap aneh, tidak terduga, terkadang bertindak keras atau kejam<br/>5. Halusinasi, gembira yang berlebihan, sifat lekas marah<br/>6. Dosis yang berlebihan dapat berakibatkan kejang - kejang dan keatian.                              <br/>EPEK - EPEK JANGKA PANJANG <br/><br/>1. Kerusakan permanen pada pembuluh darah di jantung dan di otak,tekanan darah tinggi, berakibatkan serangan jantung, stroke dan kematian<br/>2. Kerusakan pada lever (hati), ginjal dan paru-paru.<br/>3.Kerusakan jaringan dalam hidung, bila di hirup.<br/>4. Masalah pernafasan bla di hisap seperti rokok.<br/>5.Penyakit-penyakit menular dan peradangan, bila di suntikan.', '2021-06-20 02:30:51', NULL, NULL),
(11, 'Nipam', 11, 'Nipam atau dikenal sebagai magadon merupakan kepanjangan dari N-Isopropylacrylamide dengan jenis obat anti depresan. Obat ini digunakan sebagai mengurangi perasaan cemas, panik, dan insomnia atau dapat mengurangi anestesi.\nNamun jika digunakan secara berlebihan atau tidak sesuai dengan petunjuk dokter dapat menyebabkan beberapa perubahan fisik seperti wajah berubah menjadi merah, kurang fokus, disfungsi fisik tubuh seperti tidak bisa berbicara lancar atau cadel disertai dengan rasa ingin banyak berbicara, jalan tidak benar, disfungsi orgran dalam seperti gangguan pernafasan, gagal jantung, kontrol kesadaran berkurang seperti turunnya kesadaran, koma hingga menyebabkan kematian.Tidak diizinkan menggunakan nipam diluar batas prosedur dokter dan mengonsumsi bersamaan dengan alkohol karena sangat berbahaya.\n', 'nipam.jpg', '<br/>Mengalami cadel saat berbicara  <br/> Jalan sempoyongan  <br/> Wajah menjadi kemerahan  <br/> Menjadi banyak bicara  <br/> Kurang fokus  -<br/>Turunnya kesadaran', '2021-06-20 02:30:51', NULL, NULL),
(12, 'Alkohol', 12, 'Salah satu minuman yang dapat menurunkan kesadaran biasa dikenal sebagai minuman alkohol. Minuman alkohol merupakan minuman yang mengandung etanol, salah satu bahan psikoaktif. Efek samping dari konsumsi minuman beralkohol adalah kekebalan tubuh yang menurun dan mengalami sindrom putus alkohol, yaitu perasaan khawatir yang berlebihan, cemas, jantung berdebar-debar, dan halusinasi.\nPeminum minuman beralkohol sangat rentan terhadap virus HIV, serta gangguan mental organic (GMO) menjadi efek jangka panjang, GMO merupakan efek dari sifat adiktif alcohol yang mengakibatkan gangguan fungsi dan gangguan perilaku seperti ingin melukan tindakan kekerasan, berbicara asal-asalan dan tidak bisa berkonsentrasi. Pengidap GMO mengalami perubahan fisik seperti mata juling dan muka memerah.\n', 'alkohol.jpg', '<br/> 1. Teler/mabuk <br/> 2. Menyebabkan kegagalan pernapasan akut seperti yang terjadi pada bahaya formalin.  <br/> 3. Menghilangkan kesadaran  <br/> 4. Dapat mengakibatkan kematian', '2021-06-20 02:30:51', NULL, NULL),
(13, 'Nikotin', 13, 'Nikotin adalah salah satu kandungan dari rokok dengan tingkat ketiga di dunia zat adiktif paling aktif. kecanduan mengonsumsi dan ketergantungan merupakan salah satu akibat dari zat adiktif, maka tidak heran apabila berhenti merokok menjadi salah satu ujian yang berat. Jika meninggalkan nikotin maka tubuh akan merasa kekurangan asupan, kekurangan ini membuat tubuh gelisah, cemas, marah.\nPadahal jika nikotin terus dikonsumsi maka akan menimbulkan penyakit yang sangat merugikan tubuh hingga penyakit yang berujung pada kematian. Mengapa nikotin sangat sulit untuk ditinggalkan dan menjadi kesukaan untuk para golongan masyarakat? Ketika nikotin dikonsumsi melalui rokok, nikotin akan masuk kedalam tubuh hingga sampai kepada otak.\nKetika sampai, nikotin akan melepaskan zat dopamin yang menyebabkan pengguna untuk merasa senang, suasana hati menjadi baik, dan menimbulkan rasa puas. Namun gejala penyakit yang akan timbul sangatlah berbahaya karena nikotin dapat menyebabkan diabetes, kanker, impotensi dan keguguran janin, hingga kematian.\n', 'nikotin.jpg', '<br/> Meningkatkan denyut jantung  <br/> Meningkatnya kadar gula dalam darah seperti bahaya mengkonsumsi gorengan secara rutin.  <br/>Menimbulkan efek segar setelah memakainya  <br/> Menimbulkan euforia  <br/> Nafas terasa berat  <br/> Dapat mengakibatkan kanker dan stroke seperti bahaya makan mie instan terlalu sering.', '2021-06-20 02:30:51', NULL, NULL),
(14, 'kafein', 14, 'Kafein bukanlah istilah asing untuk masyarakat awam karena kafein adalah salah satu kandungan dalam teh dan kopi yang merupakan obat perangsang psikoaktif dan diuretik dalam bentuk senyawa alkaloid xantina. Meskipun begitu, keberadaan kafein tidak dibatasi oleh hukum bahkan menjadi zat psikoaktif dengan tingkat konsumsi yang tinggi. kafein dapat merangsang sistem pusat saraf sehingga rasa kantuk dapat hilang sementara.\nKafein tidak mengganggu fungsi kerja otak layaknya alkohil. namun efek jangka panjang dari konsumsi kafein dapat menyebabkan ketergantungan, yang berakibat sensitif pada adenosina dan sakit kepala akibat turunnya tekanan darah secara mendadak\n', 'kafein.jpg', '<br/> Saat pengguna mulai menghentikan pemakaian zat ini, maka dapat menimbulkan pusing, ngantuk, pemarah, serta timbul kecemasan.  <br/> Gangguan mood  <br/> Meningkatnya stres  <br/> Mempercepat rusaknya tulang  <br/> Meningkatkan gula darah  <br/> Meningkatnya tekanan darah  <br/> Meningkatnya detak jantung  <br/> Insomia  <br/> Meningkatkan kadar asam dalam perut  <br/> Mempercepat penuaan dini  <br/> Gangguan prostat', '2021-06-20 02:30:51', NULL, NULL),
(15, 'barbiturat', 15, 'Barbiturat merupakan obat yang sering digunakan pada kegiatan medis sebagai alat sedasi, atau alat penenang pasien yang digunakan untuk tindak medis demi menghindari reaksi cemas, tidak nyaman, atau gelisah dari pasien itu sendiri. Cara kerjanya yaitu merupakan obat yang dikonsumsi yang kemudian bereaksi di sistem saraf pusat untuk memerintahkan saraf untuk mengurangi aktivitas di otak hingga tenang.\nBiasanya barbiturat digunakan dalam tindakan sedasi ringan, anestesi umum, dan pengobatan untuk beberapa jenis epilepsi. Namun negatifnya adalah barbiturat memiiki efek adiktif atau candu, kemudian barbiturat menjadi berbahaya hingga fatal jika dikonsumsi bersamaan dengan alkohol.\n', 'Barbiturat.jpg', '<br/> - Suhu badan naik/demam.  <br/>-Tidak bisa tidur. <br/> -  Merasa sangat bergembira (euforia). <br/>-  Menimbulkan hasutan (agitasi). <br/>-  Banyak bicara (talkativeness).  <br/>-  Menjadi lebih berani/agresif. <br/>-  Kehilangan nafsu makan. <br/>-  Mulut kering dan merasa haus. <br/>-  Berkeringat.  <br/>- Tekanan darah meningkat.  <br/>- Sakit kepala, pusing, tremor/gemetar.  <br/>- Timbul rasa letih, takut dan depresi dalam beberapa hari. <br/>-  Gigi rapuh, gusi menyusut karena kekurangan kalsium.', '2021-06-20 02:30:51', NULL, NULL),
(16, 'Speed', 16, 'Speed, atau amphetamine merupakan zat adiktif yang dapat memberikan sebuah inejksi positif untuk tubuh seperti meningkatkan semangat kerja, pikiran dapat terkonsentrasikan dengan baik, hilang rasa kantuk, meningkatkan rasa percaya diri, dan banyak berbicara.\nDengan sifat yang diberikan positif dan ditambah ada rasa kecanduan di dalam zat ini, maka tidak heran banyak pemakai zat ini. Tetapi jjika disalahgunakan akan berdampak lebih buruk untuk kondisi tubuh.\nDampak negatif yang akan dirasakan pengguna yaitu kebutuhan dosis akan meningkat perlahan sebanding dengan banyak penggunaannya, sehingga akan menimbulkan overdoze seiring banyak pemakaian, dapat menyebabkan stress berlebihan, depresi, badan letih, tidur berlebihan, hingga psikis keinginan untuk bunuh diri.\n', 'Speed.jpg', '<br/> - Obat tidur/hipnotikum terutama golongan barbiturat dapat disalahgunakan misalnya seconal.  <br/> - Terjadi gangguan konsentrasi dan keterampilan yang berkepanjangan. <br/>  - Menghilangkan kekhawatiran dan ketegangan (tension).  <br/> - Perilaku aneh atau menunjukkan tanda kebingungan proses berpikir.  <br/> - Nampak bahagia dan santai.  <br/> - Bicara seperti sambil menelan (slurred speech).  <br/> - Jalan sempoyongan.  <br/> - Tidak bisa memberi pendapat dengan baik.', '2021-06-20 02:30:51', NULL, NULL),
(17, 'Tabs', 17, 'Tabs adalah masih belum saya cari pengertian nya ', 'tabs.jpg', '<br/> - Pada mulanya merasa sedikit terangsang. <br/> - Dapat menghilangkan pengendalian diri atau fungsi hambatan. <br/> - Bernafas menjadi lambat dan sulit. <br/> - Tidak mampu membuat keputusan. <br/> - Terlihat mabuk dan jalan sempoyongan. <br/> - Mual, batuk dan bersin-bersin. <br/> - Kehilangan nafsu makan. <br/> - Halusinasi. <br/> - Perilaku menjadi agresif/berani atau bahkan kekerasan. <br/> - Bisa terjadi henti jantung (cardiac arrest). <br/> - Pemakaian yang berlebihan dapat menyebabkan kerusakan syaraf otak menetap, keletihan otot, gangguan irama jantung, radang selaput mata, kerusakan hati dan ginjal dan gangguan pada darah dan sumsum tulang. Terjadi kemerahan yang menetap di sekitar hidung dan tenggorokan. <br/> - Dapat terjadi kecelakaan yang menyebabkan kematian di antaranya karena jatuh, kebakar, tenggelam yang umumnya akibat intoksikasi/keracunan dan sering sendirian. bat intoksikasi/keracunan dan sering sendirian.', '2021-06-20 02:30:51', NULL, NULL),
(18, 'DXM', 18, 'DXM atau Dextromethorphan atau robo-trip adalah senyawa yang serupa dengan PCP dan Ketamine. Namun dalam fungsi kesehatan, DXM memiliki peran yang berbeda, DXM sering dijumpai pada obat batuk karena memiliki pengaruh antitussive yaitu dapat meredam penyakit batuk jika digunakan pada dosis yang sebenarnya. Jika DXM digunakan tidak sesuai dosis maka dapat memiliki pengaruh halusinogen dissociative.\nEfek lainnya selain merasa berhalusinasi dan tidak bisa membedakan dunia nyata atau tidak adalah berkeringat banyak, sela nafas menjadi pendek diikuti dengan detak jantung secara cepat, amnesia, rabun pandangan, paranoid, merasakan hal seperti mati, koma, dan kematian. DXM bersamaan dengan PCP dan ketamine memiliki peran menjadi bahan pengganti atau pemalsu atau pencampur dari/ke pil ekstasi karena DXM dan PCP lebih murah daripada MDMA\n', 'DXM.jpg', '<br/> -Gangguan fungsi motorik seperti berjalan, melompat, berlari, dsb <br/> -Episode disosiatif keadaan mental seperti orang yang tidak waras <br/> -Halusinasi pendengaran atau pengelihatan <br/> -Mual atau muntah <br/> -Peningkatan denyut jantung <br/> -Tekanan darah tinggi <br/> -Suhu tubuh meningkat <br/> -Penumpukan asam dalam cairan tubuh', '2021-06-20 02:30:51', NULL, NULL),
(19, 'Mescaline', 19, 'Mescaline adalah sebuah zat narkotika psikoaktif yang dihasilkan dari kaktus peyote dan san pedro yang tumbuh di Mexico dan Amerika Serikat. Hasil dari kaktus ini juga tanpa adanya proses fermentasi atau olahan. Zat narkotika yang berbahaya dari mescaline adalah halusinogen atau zat yang dapat memeberikan efek halusinasi yang dapat mengubah fikiran dan perasaannya.\nEfek lain dari penggunaannya adalah dapat menyebabkan sesak nafas, schizophrenia, sensitivitas meningkat, euforia, mengubah persepsi, dan perubahan perilaku hingga menyebabkan keinginan untuk bunuh diri.\n', 'Mescaline.jpg', '<br/> - kurangnya koordinasi,  <br/> - penglihatan kabur, <br/> - hipertermia,  <br/> - peningkatan frekuensi kardiorespirasi dan takikardia,  <br/>  - penurunan sensitivitas dan pelebaran pupil. <br/>  - halusinasi dan perasaan derealization. <br/>  - rasa takut, <br/>  - panik,', '2021-06-20 02:30:51', NULL, NULL),
(20, 'Calmlet', 20, 'Calmlet, seperti arti dari namanya adalah calm atau tenang. Obat ini berfungsi sebagai obat penenang dengan efek sedatif dan antidepresan yang dijual secara umum. Memiliki khasiat sebagai mengatasi pasien yang mengalami penyakit penderita depresi, gangguan jiwa, dan panik. Karena calmlet memiliki efek samping ketergantungan, maka obat ini hanya diizinkan untuk para pasien yang sangat membutuhkan dan sudah mendapatkan izin dan petunjuk dari dokter.\nUntuk penggunaan secara normal pun dibatasi seperti penggunaannya yang diperbolehkan dalam jangka pendek, sesuai resep dokter. Namun karena efek ketergantungan dan alat penenang inilah calmlet sering disalahgunakan. Dampaknya dapat meningkatkan kemungkinan epilepsi, gangguan mental, gangguan emosi, sakit kepala, kantuk dan kelelahan serta berkurangnya konsentrasi.\nMeskipun obat ini beredar secara secara legal, ada baiknya untuk menghindari obat ini karena sudah masuk kategori narkotika kecuali dalam kondisi khusus yang sudah dapat perizinan dari dokter.\n', 'Calmlet.jpg', ' <br/>  1. Sedasi atau ketenangan <br/>   2. Pusing  <br/>  3. Lemas dan goyah  <br/>  4. Mengantuk  <br/>  5. Hilang orientasi  <br/>  6. Pusing  <br/>  7. Gangguan tidur  <br/>  8. Bingung  <br/>  9. Lekas marah dan agresif  <br/>  10. Kegembiraan berlebihan atau tidak wajar  <br/>  11. Gangguan memori', '2021-06-20 02:30:51', NULL, NULL),
(21, 'Crack', 21, 'Crack adalah pengertian nya belum saya masukan', 'Crack.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(22, 'Metadon', 22, 'Metadon adalah jenis obat opioid sintetik yang memiliki efek sama kuatnya dengan heroin. Metadon juga mengandung efek sedatif namun tidak begitu kuat. Dalam dunia medis, metadon digunakan sebagai pengobatan pemulihan pengguna golongan opioid seperti heroin, morfin dan kodein agar tidak mengalami sakaw. Selain itu metadon digunakan untuk menindak penyakit kronis disebabkan karena panjangnya durasi tindakan dimana obat ini dapat bertahan hingga 24 hingga 72 jam, efeknya sangat kuat dan biayanya rendah.\nWalaupun sangat berguna hingga sebagai penangkal zat narkotika, metadon memiliki efek samping seperti asma, sembelit, kecanduan dengan alkohol, koma, keguguran janin jika mengandung, dan beberapa gejala bertingkat lainnya jika obat ini digunakan berkelanjutan.\n', 'Metadon.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(23, 'Lexotan', 23, 'Lexotan adalah jenis obat keras yang mengandung bromazepam, yang termasuk dalam kelompok benzodiazepin. Zat ini memberikan efek menghilangkan rasa cemas, panik, dan takut atau fobia.\nDengan kemampuan tersebut awalnya dapat membantu dalam dunia pengobatan, namun benzodiazepin memiliki ketergantungan sehingga lexotan juga merupakan zat adiktif berbahaya. Efek negatif dari penggunaan lexotan pertama dilihat dari perilaku.\nLexotan dapat menghilangkan rasa takut, panik, cemas sehingga dapat membuat pengguna untuk tidak takut melakukan kriminal. Kemudian dari sistem organ dapat merusak sisem saraf, menurunkan konsentrasi, disfungsi kardiovaskular, meningkatkan detak jantung, hiperaktif, tremor, mual. Keberadaan lexotan di Indonesia tidak hanya sudah ada tetapi sudah marak digunakan.\n', 'Lexotan.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(24, 'Hashish', 24, 'Hashish merupakan saripati mariyuana atau ganja yang berasal dari tumbuhan genus Cannabis. Memiliki penanganan beda dengan cara memilah tanaman ganja dari trikoma yang kemudian dikompres. Secara tatanan bahasa, hashish diambil dari kata bahasa arab yaitu hassasin yang berarti pembunuh bayaran. Sebelum para hassasin melaksanakan tugasnya mereka mengkonsumsi sebuah benda yang kemudian disebut hashish.\nKandungan dari tumbuhan ini yang sangat membahayakan adalah unsur THC (tetrahydrocannabinol), dimana untuk hashish ini memiliki pemrosesan yang berkonsentrasi untuk meningkatkan kandungan THCnya. Bahaya dari kandungan THC jika disalahgunakan dapat menyebabkan detak jantung yang lebih cepat, mulut kering, bola mata merah, nafsu makan meningkat, disfungsi otak seperti pikiran menjadi lamban dan sulit berkonsentrasi.\n\n\n\n', 'Hashish.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(25, 'Ketamine', 25, 'Ketamine adalah senyawa sintetik PCP sebagai obat anestetik dalam dunia kedokteran hewan dan manusia. Ketamine dahulu sebagai bahan pengobatan sangatlah terkenal, hingga diketahui bahwa penggunaan ketamine merupakan zat adiktif yang dapat menyebabkan candu. Ketika sudah masuk pada tahap ketergantungan, maka pengguna akan merasakan halusinogen, dissociative dan delirium, maka dari itu ketamine memiliki nama lain special-K dan happy-K.\nEfek samping dari penggunaan yang tidak benar dapat menyebabkan kerusakan jaringan otak, amnesia, kehilangan kontrol dalam mengendalikan otot, paranoid dan panic attack, sampai bisa merasakan NDE atau perasaan hampir mati, yang berujung kematian itu sendiri. Penggunaan ketamine dapat melalui hidung dengan cara dihisap, dimakan dalam bentuk pil, dan disuntik.\n', 'Ketamine.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(26, 'Flakka', 26, 'Flakka merupakan jenis narkotika yang efeknya sangat berbahaya. Flakka dahulu diproduksi bertujuan sebagai obat sintesis. Namun penggunaan sebagai obat itu dihentikan ketika dokter menemukan zat berbahaya didalam obat ini. Baru kemudian para dokter mengubah status flakka yang sebelumnya menjadi obat menjadi narkotika paling berbahaya.\nBukti banyak sudah beredar bahwa flakka terkenal sebagai zombie drug atau obat zombie, karena mengonsumsi obat ini dapat mengubah perilaku pengguna sampai menyerupai zombie. Hal ini disebabkan karena efek sakau berlangsung sementara saja tetapi permanen dalam otak yang bahkan dapat menghancurkan otak.\nSelain itu, flakka memiliki potensi 10.000 kali lebih kuat daripada morfin. Distribusi flakka dahulu banyak digunakan di Amerika, kini sudah masuk hingga Indonesia.\n\n', 'Flakka.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(27, 'Valium', 27, 'Valium adalah obat sedatif atau penenang yang mengandung diazepam. Obat penenang memiliki fungsi pengobatan untuk penderita gangguan psikis dan epilepsi. Namun valium yang mengandung diazepam ini memiliki bahaya narkotika yaitu efek candu atau ketergantungan. Ada beberapa ketentuan atau kondisi dimana pasien diperbolehkan menggunakan obat ini, ketika pasien merasa cemas, lepas alkohol, ingin menjalankan operasi dan endoskopi, spasme otot dan ganggunan kejang epilepsi. Ketika obat itu digunakan tidak sesuai seperti kelebihan dosis, digunakan menerus, dan digunakan pada orang yang memiliki ketidakcocokan pada obat itu maka akan ada efek samping hipotensi, lemas, nafas akan berubah melemah hingga henti, dan gangguan jumlah komponen darah. Dan jika ada pengguna yang sudah kecandu dan ingin berhenti, tubuhpun akan kena efek sampingnya yaitu sakau. Maka daripada itu, untuk menghentikan pecandu valium perlu penanganan berkala dan bertahap dan tentu dibawah pantauan dari dokter.', 'Valium.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(28, 'Tembakau', 28, 'Tembakau adalah belum saya masukan penjelasannya', 'Tembakau.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(29, 'Sedatif', 29, 'Sedatif adalah belum saya masukan penjelasanya', 'Sedatif.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(30, 'Xanax', 30, 'Xanax memiliki zat alprazolam didalamnya yang termasuk sebagai obat penenang atau benzodiazepine. Xanax ditujukan untuk orang yang sedang terkena insomnia, cemas berlebihan, stress, serangan panik karena xanax merupakan obat bersifat sedatif hipnotik yaitu memudahkan rasa kantuk, tidak membuat cemas dan takut. Di Indonesia obat ini diproduksi secara legal, namun xanax termasuk golongan narkoba.\nXanax sudah bersejarah memiliki keterkaitan dengan pembunuhan penyanyi dunia Michael Jackson dan Whitney Houston. Efek yang membahayakan adalah sifat ketergantungannya. Semua keburukan dimulai dari itu, dan kemudian akan ada efek domino. Setelah orang tergantung dengan obat ini maka orang akan mengonsumsi namun ditingkatkan dosisnya sesuai banyak penggunaannya karena adanya withdrawal jika masih menggunakan dosis yang sama.\nJika dirasa sudah cukup atau membahayakan tubuh atau dosis tidak bisa ditingkatkan, tubuh akan terserang sakaw, sehingga pengguna terpaksa diminta kembali untuk menggunakan obat ini agar tidak sakaw. Dan menggunakan obat ini juga memiliki efek samping yang membahayakan tubuh seperti halusinasi hingga kematian.\n\n', 'Xanax.jpg', '', '2021-06-20 02:30:51', NULL, NULL),
(31, 'Asetildihidrokodeina', 31, 'masih beelum saya cari pengertian nya', '', '', '2021-06-20 02:30:51', NULL, NULL),
(32, 'Dekstropropoksifena', 32, 'masiih kosong', '', '', '2021-06-20 02:30:51', NULL, NULL),
(33, 'Dihidrokodeina', 33, 'masih kosong', '', '', '2021-06-20 02:30:51', NULL, NULL),
(34, 'Etilmorfina', 34, 'masiih kosong', '', '', '2021-06-20 02:30:51', NULL, NULL),
(35, 'Nikodikodina', 35, 'masih kosong', '', '', '2021-06-20 02:30:51', NULL, NULL),
(36, 'Nikokodina', 36, 'masih kosong', '', '', '2021-06-20 02:30:51', NULL, NULL),
(37, 'Norkodeina', 37, '', '', '', '2021-06-20 02:30:51', NULL, NULL),
(38, 'Polkodina', 38, '', '', '', '2021-06-20 02:30:51', NULL, NULL),
(39, 'Propiram', 39, '', '', '', '2021-06-20 02:30:51', NULL, NULL),
(40, '36.	Buprenorfina', 40, '', '', '', '2021-06-20 02:30:51', NULL, NULL),
(41, 'coba', 13, 'df', '', 'fd', '2021-06-20 03:42:21', '2021-06-20 03:42:21', NULL),
(42, 'dfs', 16, 'df', '', 'df', '2021-06-20 03:42:49', '2021-06-20 03:42:49', NULL),
(45, 'coba', 1, 'oba', '', 'coba', '2021-06-20 11:53:55', '2021-06-20 04:53:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `types_ibfk_1` (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
