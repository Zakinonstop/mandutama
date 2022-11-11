<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT Mandutama Multisarana Teknik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Icons -->
  <link href="<?php echo base_url() . 'assets/img/logo-mmt.png' ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Sora:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() . 'assets/vendor/aos/aos.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/vendor/glightbox/css/glightbox.min.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/vendor/swiper/swiper-bundle.min.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/vendor/remixicon/remixicon.css' ?>" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!--Link Animasi Modal-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">

  <!-- ===== Fontawesome CDN Link ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href=""><img src="<?php echo base_url() . 'assets\img\logo-mmt.png' ?>" alt=""></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#whychooseus">Profile</a></li>
          <li><a class="nav-link scrollto" href="#layanan">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#course">Education</a></li>
          <!--<li><a class="nav-link scrollto" href="#team">Tim Kami</a></li>
          <li><a class="nav-link scrollto" href="#artikel">Artikel</a></li>-->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          <li style="padding: 8px 25px; margin-left: 30px;"><a class="nav-link scrollto" href="#"><i class="bx bxl-twitter"></i></a></li>
          <li><a class="nav-link scrollto" href="https://www.facebook.com/baraciptaesaengineering/"><i class="bx bxl-facebook"></i></a></li>
          <li><a class="nav-link scrollto" href="https://www.instagram.com/beecons/?igshid=at9isz8pvz2f"><i class="bx bxl-instagram"></i></a></li>
          <li><a class="nav-link scrollto" href="https://www.linkedin.com/company/beeconsyogyakarta/"><i class="bx bxl-linkedin"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle" style="color:white"></i>
      </nav><!-- .navbar -->
  </header><!-- End Header -->

  <!-- Start Hero Area -->
  <section id="hero" class="hero-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
          <div class="hero-content">
            <h2 class="wow fadeInUp" data-wow-delay=".4s">CONSTRUCTION, SERVICES, AND TRADING</h2>
            <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipisicing
              elit. deleniti voluptatum! Natus
              beatae laborum veniam distinctio.</p>
            <div class="btn-bg">
              <a href="#contact" class="btn btn-light">CONTACT US</a>
              <a href="#about" class="btn btn-outline-light">ABOUT US</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Area -->

  <!-- Start Count Down Area -->
  <div class="count-down">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="box-head"><a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox"><img src="assets/img/about.png" width="100%" height="400px">
              <img src="<?php echo base_url() . 'assets/img/play.png' ?>" alt="" data-aos="zoom-in" style="margin-left: 47%; margin-top:-30%; "></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Count Down Area -->

  <!-- ======= Counts Section ======= 
  <section id="counts" class="counts">
    <div class=" counts container" data-aos="fade-up">
      <div class="row">

        <?php
        foreach ($tbl_statistik as $statistik) : ?>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $statistik['jumlah']; ?>" data-purecounter-duration="1" class="purecounter bi bi-plus"></span>

              <p><?php echo $statistik['judul']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>

        <!--  <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="76" data-purecounter-duration="1" class="purecounter bi bi-plus"></span>
            <p>Courses</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter bi bi-plus"></span>
            <p>Trainings</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="78" data-purecounter-duration="1" class="purecounter bi bi-plus "></span>
            <p>Perusahaan</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1" class="purecounter bi bi-plus ""></span>
            <p>Member</p>
          </div>
        </div>-->
  </div>
  </div>
  </section>
  <!-- End Counts Section -->

  <!--WhyChoseMe-->
  <section>
    <div id="whychooseus" class="mode container">
      <div class="section-title ">
        <h2>Why Choose Us?</h2>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card-body">
            <i style="float: left;margin-top: 10px; margin-right:15px;font-size:50px; color:#42aeda;" class="bi bi-send-check"></i>
            <h5 class="card-title">Real Project</h5>
            <p class="card-text">Portofolio terasa lebih nyata dengan adanya projek akhir ketika kamu menyelesaikan seluruh materi pembelajaran.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card-body">
            <i style="float: left;margin-top: 10px; margin-right:15px;font-size:50px; color:#42aeda;" class="bi bi-send-check"></i>
            <h5 class="card-title">Mentor Expert</h5>
            <p class="card-text">Mentor yang ahli di bidangnya akan secara langsung membimbing kamu selama program berlangsung.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card-body">
            <i style="float: left;margin-top: 10px; margin-right:15px;font-size:50px; color:#42aeda;" class="bi bi-send-check"></i>
            <h5 class="card-title">Curiculum Relavant</h5>
            <p class="card-text">Kami menyediakan kurikulum dengan standar yang telah disesuaikan dengan kebutuhan industri saat ini.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card-body">
            <i style="float: left;margin-top: 10px; margin-right:15px;font-size:50px; color:#42aeda;" class="bi bi-send-check"></i>
            <h5 class="card-title">List Alumni</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>

      </div>
    </div>
  </section><br>
  <!--EndWhyChoseMe-->

  <!-- ======= About US ======= -->
  <section id="about" class="about" data-aos="fade-up">
    <div class="about-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 sm-m-top-30 about-contact">
            <div class="section-about">
              <h2>About US</h2>
            </div>
          </div>

          <div class="col-md-6 sm-m-top-30 about-links">
            <h4>
              Mandutama Multisarana Teknik adalah sebuah perusahaan yang didirikan sebagai sebuah perseroan terbatas
              (PT) didirikan di Surabaya berdasarkan akte Notaris Bambang Eko Muljono SH, MMA dengan nomor dan
              tanggal pendirian No. 2, 7 Februari 2007. Dengan Visi Memberikan pelayanan kepada semua pelanggan dengan jaminan kualitas dan ketepatan waktu
              pelaksanaan.
            </h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About US -->

  <!-- ======= Skills Section ======= -->
  <!--Hide-
  <section id=" services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title ">
        <h2>Our Skills</h2>
        <p style="color:#999; font-size:8px;">
          <center>Kami memberikan pelayanan terbaik demi kepuasan Anda<center>
        </p>
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center mb-5">

        <div class="col-2">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
          </div>
          <div class="icon-box">
            <div class=" icon">
              <img src="<?php echo base_url() . 'assets/img/skills/Vector (2).jpg' ?>" alt="">
            </div>
            <h7><a href="">General Construction</a></h7>
          </div>
        </div>

        <div class="col-2">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
          </div>
          <div class="icon-box">
            <div class="icon">
              <img src="<?php echo base_url() . 'assets/img/skills/Vector (1).jpg' ?>" alt="">
            </div>
            <h7><a href="">Special Projects</a></h7>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center mb-5">

        <div class="col-2">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
          </div>
          <div class="icon-box">
            <div class="icon">
              <img src="<?php echo base_url() . 'assets/img/skills/emojione_building-construction (1).jpg' ?>" alt="">
            </div>
            <h7><a href="">Design & Build </a></h7>
          </div>
        </div>

        <div class="col-2">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
          </div>
          <div class="icon-box">
            <div class="icon">
              <img src="<?php echo base_url() . 'assets/img/skills/clarity_building-solid-badged.jpg' ?>" alt="">
            </div>
            <h7><a href="">Construction Management</a></h7>
          </div>
        </div>
      </div>
  </section><--Hide-->
  <!-- End Skill Section -->
  <br>
  <!--Produk Layanan-->
  <section id="layanan" class="layanan section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title ">
        <h2>Services</h2>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="card-body">
            <center><img src="<?php echo base_url() . 'assets/img/bim2.jpg' ?>" class="img-fluid" style="height:300px; width:500px;" alt=""></center>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-4">EDUCATION</h3>
            </div>
            <p class="card-text" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel turpis mi, adipiscing nisl integer pulvinar amet, sed sed. Neque ac, sollicitudin nibh vulputate urna viverra fermentum amet. </p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card-body">
            <center><img src="<?php echo base_url() . 'assets/img/consul.jpg' ?>" class="img-fluid" style="height:300px; width:500px" alt=""></center>
            <div class="text-center p-4 pb-0">
              <h3 class="mb-4">PROJECT CONSULTING</h3>
            </div>
            <p class="card-text" style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel turpis mi, adipiscing nisl integer pulvinar amet, sed sed. Neque ac, sollicitudin nibh vulputate urna viverra fermentum amet. </p>
          </div>
        </div>
  </section><br><br>
  <!--End Produk Layanan-->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Portfolio</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-ei">Electrical & Instrumen</li>
            <li data-filter=".filter-civil">Civil</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item filter-ei">
          <img src="<?php echo base_url() . 'assets/img/portfolio/ei-1.png' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>WET AIR OXIDATION - PROYEK PENGEMBANGAN GAS JAWA AREA GUNDIH</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/ei-1.png' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="WET AIR OXIDATION - PROYEK PENGEMBANGAN GAS JAWA AREA GUNDIH"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-ei">
          <img src="<?php echo base_url() . 'assets/img/portfolio/ei-2.jpg' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>ELECTRICAL AND INSTRUMENT WORK PEMBANGUNAN CENTRAL PROCCESSING PLANT (CPP) AREA GUNDIH PROYEK PPGJ</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/ei-2.jpg' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ELECTRICAL AND INSTRUMENT WORK PEMBANGUNAN CENTRAL PROCCESSING PLANT (CPP) AREA GUNDIH PROYEK PPGJ"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-ei">
          <img src="<?php echo base_url() . 'assets/img/portfolio/ei-3.jpg' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PROYEK EPCC PEMBANGUNAN FASILITAS PRODUKSI & REINJEKSI PANAS BUMI UNIT IV 20 MV DI AREA GEOTHERMAL LAHENDONG</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/ei-3.jpg' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PROYEK EPCC PEMBANGUNAN FASILITAS PRODUKSI & REINJEKSI PANAS BUMI UNIT IV 20 MV DI AREA GEOTHERMAL LAHENDONG"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-ei">
          <img src="<?php echo base_url() . 'assets/img/portfolio/ei-4.jpg' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>ELECTRICAL WORK OF VARIABLE FREQUENCY DRIVE (VFD0 AND CABLING AT TTU TUBAN AREA</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/ei-4.jpg' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ELECTRICAL WORK OF VARIABLE FREQUENCY DRIVE (VFD0 AND CABLING AT TTU TUBAN AREA"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-ei">
          <img src="<?php echo base_url() . 'assets/img/portfolio/ei-5.png' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>ELECTRICAL CABLE INSTALLATION WORK</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/ei-5.png' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ELECTRICAL CABLE INSTALLATION WORK"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-ei">
          <img src="<?php echo base_url() . 'assets/img/portfolio/ei-6.jpg' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BUILDING ELECTRICAL AND INSTRUMENT WORK FOR TERMINAL TRANSIT UTAMA BBM TUBAN</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/ei-6.jpg' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="BUILDING ELECTRICAL AND INSTRUMENT WORK FOR TERMINAL TRANSIT UTAMA BBM TUBAN"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-ei">
          <img src="<?php echo base_url() . 'assets/img/portfolio/ei-7.jpg' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>TERMINAL TRANSIT UTAMA BBM TUBAN DAN PIPANISASI JAWA TIMUR</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/ei-7.jpg' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="TERMINAL TRANSIT UTAMA BBM TUBAN DAN PIPANISASI JAWA TIMUR"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-civil">
          <img src="<?php echo base_url() . 'assets/img/portfolio/civil-1.png' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>THE EPCI OF THE FACILITIES FOR THE DEVELOPMENT OF MADURA BD FIELD (GMS-HUSKY) AND ACCESS ROAD TO CULVERT 3 CPP PPGJ AREA GUNDIH</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/civil-1.png' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="THE EPCI OF THE FACILITIES FOR THE DEVELOPMENT OF MADURA BD FIELD (GMS-HUSKY) AND ACCESS ROAD TO CULVERT 3 CPP PPGJ AREA GUNDIH"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-civil">
          <img src="<?php echo base_url() . 'assets/img/portfolio/civil-2.jpg' ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PARKING AREA PAVING WORK, INSTALLATION & ACCESSORIES, REMAINING FENCE, FINISHING DRAINAGE AND ACCESS ROAD TO CULVERT 3 CPP PPGJ AREA GUNDIH</h4>
            <a href="<?php echo base_url() . 'assets/img/portfolio/civil-2.jpg' ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PARKING AREA PAVING WORK, INSTALLATION & ACCESSORIES, REMAINING FENCE, FINISHING DRAINAGE AND ACCESS ROAD TO CULVERT 3 CPP PPGJ AREA GUNDIH"><i class="bx bx-plus"></i></a>
            <a href="<?php echo base_url() . 'proyek_1' ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- Courses Start -->
  <section id="course" class="course">
    <div class="container-xxl py-5">
      <div class="section-title ">
        <h2>Course</h2>
      </div>
      <div class="row g-4 justify-content-center">
        <?php
        if ($courselatest != '') {
          foreach ($courselatest as $item) {
        ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="course-item" style="background-color:#F0F0F0;box-shadow: 2px 2px 2px grey;">
                <div class=" position-relative overflow-hidden">
                  <a href="course/details_course/<?= $item->course_id ?>">
                    <img class="img-fluid" style="width: 100%; height: 60%;" src="<?php echo base_url() . 'assets/img/course/course1.png' ?>" alt="" /></a>
                  <!--<div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style="padding-top: 5px; ">
                      <label class="flex-shrink-0 btn-sm btn-light" style="border-radius: 0 5px 5px 0;"><b><?= $itemCategory->name ?></b></label>
                  </div>-->
                  <div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
                    <label class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b><span class="formatPrice"><?= $item->new_price ?></span></b></label>
                  </div>
                </div>
                <div class="text-decoration p-4 pb-0 ">
                  <a href="course/details_course/<?= $item->course_id ?>">
                    <h6 class="mb-3" style="font-size:16px; height:100%; margin: 0px 0px 8px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><b><?= $item->title ?></b></h6>
                  </a>
                  <button type="button" class="btn btn-info mb-4" style="color:#fff;font-weight:bold; width:80%;"><a href="<?php echo base_url() . 'signin' ?>"><b>Buy</b></a></button>
                  <button type="button" class="btn btn-outline-info mb-4" style="border-radius: 5px; font-weight:bold;"><a href="<?php echo base_url() . 'signin' ?>"><i class="bi bi-cart-plus-fill"></i></a></button>
                </div>
              </div>
            </div>
        <?php }
        }
        ?>
      </div>
    </div>
    <div class="text-center">
      <button type="button" class="btn btn-outline-info btn-lg" style="border: solid 3px; border-radius:100px; border-color: #0dcaf0">
        <a href="<?php echo base_url() . 'course' ?>" style="color: #000; text-decoration: none; display: block; width: 150px; border-radius: 50px; "><b>See All</b></a>
      </button>
    </div>
  </section><br>
  <!-- Courses End -->

  <!-- Training Start 
  <section id="course" class="course">
    <div class="container-xxl py-5">
      <div class="section-title ">
        <h2>Training</h2>
      </div>
      <div class="row g-4 justify-content-center">
        <?php for ($i = 0; $i < 4; $i++) : ?>
          <div class="col-lg-3 col-md-6">
            <div class="course-item " style="background-color:#fff;border: unset;height: 80%; ">
              <div class="position-relative overflow-hidden">
                <a href="course">
                  <img class="img-fluid" style="width: 100%; height: 60%;" src="<?php echo base_url() . 'assets/img/course/course2.png' ?>" alt="" /></a>
                <div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style="padding-top: 5px; ">
                  <label class="flex-shrink-0 btn-sm btn-light" style="border-radius: 0 5px 5px 0;"><b>Basic</b></label>
                </div>
                <div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
                  <label id="rupiah" class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b>Rp 500.000</b></label>
                </div>
              </div>
              <div class="text-decoration p-4 pb-0">
                <h6 class="mb-3" style="font-size:16px; height:100%; margin: 0px 0px 8px;"><b>Introducing to BIM</b></h6>
              </div>
            </div>
            <button type="button" class="btn btn-warning mb-4" style="border-radius: 5px; font-weight:bold; width:75%; margin-left:20px"><a href="<?php echo base_url() . 'signin' ?>"><b>Buy</b></a></button>
            <button type="button" class="btn btn-outline-warning mb-4" style="border-radius: 5px; font-weight:bold;"><a href="<?php echo base_url() . 'signin' ?>"><i class="bi bi-cart-plus-fill"></i></a></button>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <div class="text-center">
      <button type="button" class="btn btn-warning">
        <a href="<?php echo base_url() . 'course' ?>" style="color: #000; text-decoration: none; display: block; width: 120px; border-radius: 5px;"><b>See All</b></a>
      </button>
    </div>
  </section><br><br>
  <!-- Training End -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">
      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Maria</h3>
              <h4>Customer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                They were so friendly and it was pleasure to get my tasks done. I'm very happy with services their provided. I will recommend this company to my family and friends. Their works is professional and their pricing was competitive.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Justin</h3>
              <h4>Customer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                A wonderful works, Thank you! The best construction company in town as it proved by quality of works and services. Their services make my feel so special. I always enjoy coming here, i would definitely return for future projects.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Artikel ======= 
  <section id="artikel" class="artikel container" data-aos="fade-up">
    <div class="section-title">
      <h2>ARTIKEL</h2>
    </div>
    <a href="<?php echo base_url() . 'artikel_all' ?>" class="" style="display: flex; flex-wrap: wrap; list-style: none; font-weight: normal; padding: 0; margin: 0;
	font-size: 16px; color: #0055ff; margin-left: 90%; margin-bottom: 10px;">Semua Artikel</a>
    <div class="row g-4 justify-content-center ">

      <?php
      foreach ($tbl_artikel as $artikel) : ?>
        <div class=" col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="artikel-item bg-light">
            <img src="<?php echo base_url('/assets/img/artikel/') . $artikel['foto'] ?>" class="img-fluid" style="width: 100%; height: 60%; border-radius: 10px" alt="">
            <h3><?php echo $artikel['tag']; ?></h3>
            <h6><?php echo $artikel['tgl_update']; ?></h6>
            <a href=" <?php echo base_url() . 'artikel_details1' ?>">
              <h4><?php echo $artikel['judul']; ?></h4>
            </a>
            <p> <?php echo $artikel['deskripsi']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>

      <!--  <div class=" col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="artikel-item bg-light">
          <div class="position-relative overflow-hidden">
            <img class="img-fluid" style="width: 100%; height: 60%; border-radius: 10px" src="assets/img/artikel/artikel_details1.jpg" alt="" />
          </div>
          <h3>Kategori Artikel</h3>
          <h6>5 minutes read</h6>
          <a href="<?php echo base_url() . 'artikel_details1' ?>">
            <h4>Magang Merdeka X PT. Baracipta Esa Engineering</h4>
          </a>
          <p>Kementerian Pendidikan, Kebudayaan, Riset,
            dan Teknologi mengadakan program yang....</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="artikel-item bg-light">
          <div class="position-relative overflow-hidden">
            <img class="img-fluid" style="width: 100%; height: 60%; border-radius: 10px" src="assets/img/artikel/artikel_details1.jpg" alt="" />
          </div>
          <h3>Kategori Artikel</h3>
          <h6>5 minutes read</h6>
          <a href="<?php echo base_url() . 'artikel_details1' ?>">
            <h4>Magang Merdeka X PT. Baracipta Esa Engineering</h4>
          </a>
          <p>Kementerian Pendidikan, Kebudayaan, Riset,
            dan Teknologi mengadakan program yang....</p>
        </div>
      </div> -->
  </div>
  </section>
  <!-- End Artikel -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-4">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Address</h3>
            <p>Jl. Pagesangan Baru I No.15, Pagesangan, Jambangan
              Surabaya 60233, Jawa Timur, Indonesia</p>
          </div>
        </div>

        <div class="col-lg-2 ">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p><a href="info@mandutama.com ">info@mandutama.com </a></p>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Telephone</h3>
            <p>+6231 8287 717</p>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="info-box  mb-4">
            <i class="bi bi-whatsapp"></i>
            <h3>WhatsApp</h3>
            <p><a href="http://wa.me/628123520670">08112632799</a></p>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="info-box  mb-4">
            <i class="bi bi-clock"></i>
            <h3>Operating Hours</h3>
            <p>Senin - Jumat <br>08:00 - 16:00 WIB</p>
          </div>
        </div>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2065184822277!2d112.71576661744385!3d-7.330687900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb5f5d7cc035%3A0xad1ba770c87a1e41!2sPT.%20MANDUTAMA%20MULTISARANA%20TEKNIK!5e0!3m2!1sid!2sid!4v1667877902017!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6">
          <form method="post" action="kirimemail/send" class="php-mailer-info">
            <div class="row">
              <div class="col form-group">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nama Lengkap" required>
              </div>
              <div class="col form-group">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <input class="form-control" type="number" name="telepon" id="telepon" placeholder="No Telepon" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" id="pesan" rows="5" placeholder="Pesan" required></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary" id="KirimEmail">Kirim </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->


  <?php $this->load->view('footer'); ?>


  <div id="preloader"></div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Button Whatsapp -->
  <a href="http://wa.me/628123520670" class="btn btn-info" target="_blank" style="position: fixed; right: 70px; bottom: 15px; height :40px; z-index:99"><i class="bi bi-whatsapp" style="margin-right: 5px; "></i>Hubungi Kami</a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() . 'assets/vendor/purecounter/purecounter_vanilla.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/aos/aos.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/glightbox/js/glightbox.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/isotope-layout/isotope.pkgd.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/swiper/swiper-bundle.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/waypoints/noframework.waypoints.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/php-email-form/validate.js' ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() . 'assets/js/main.js' ?>"></script>
  <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
  <script src="<?php echo base_url() . 'assets/js/jquery.priceformat.js' ?>"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="<?php echo base_url() . 'assets/js/script.js' ?>"></script>
  <script>
    $('#label1').on('hide.bs.modal', function() {
      $(".modal-backdrop.in").remove();
    })
  </script>

  <script>
    $(document).ready(function() {
      $('.formatPrice').priceFormat({
        prefix: 'Rp ',
        // centsSeparator: ',',
        thousandsSeparator: '.'
      });
    })
  </script>

</body>

</html>