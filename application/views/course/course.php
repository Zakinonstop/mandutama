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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <link href="<?php echo base_url() . 'assets/css/faq.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/css/category.css' ?>" rel="stylesheet">


  <!-- ===== Fontawesome CDN Link ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <!---- New ---->
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() . 'assets\img\logo-mmt.png' ?>" alt=""></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home </a></li>
          <li><a class="nav-link scrollto" href="#course">Course</a></li>
          <li><a class="nav-link scrollto" href="#training">Training</a></li>
          <li><a class="nav-link scrollto" href="#consulting">Implementation</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="getstarted scrollto" href="<?php echo base_url() . 'signin' ?>" style="color:#000;">Sign In</a></li>
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
            <h2 class="wow fadeInUp" data-wow-delay=".4s">FIND YOUR ENGINEERING COURSE REACH YOUR DREAM</h2>
            <p class="wow fadeInUp" data-wow-delay=".6s">Ornare dolor ullamcorper id vitae non, vel sed. Pulvinar quis nisi, odio bibendum. Quis mattis phasellus risus sagittis gravida accumsan integer. Porttitor arcu et nibh nisl etiam pulvinar adipiscing. </p>
            <!--<div class="btn-bg">
              <a href="#" class="btn btn-warning">ENROLL NOW</a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Area -->

  <!-- Start Count Down Area 
  <div class="count-down">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="box-head"><a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox"><img src="<?php echo base_url() . 'assets/img/course/course.png' ?>" width="100%" height="450px">
              <img src="<?php echo base_url() . 'assets/img/play.png' ?>" alt="" data-aos="zoom-in" style="margin-left: 47%; margin-top:-40%; "></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  End Count Down Area -->

  <!---  Courses Start --->
  <section id="course">
    <div class="container-xxl py-5">
      <div class="section-title ">
        <h2>Course</h2>
        <p style="color:#999; font-size:8px;">
          <center>Layanan kursus di Bidang Engineering<center>
        </p>
      </div>

      <div style="display: flex;">
        <!-- Button foreach group -->
        <div id="filtering">
          <button class="bttn" onclick="geeksportal('all')">
            All
          </button>
          <button class="bttn" onclick="geeksportal('Basic')">
            Basic
          </button>
          <button class="bttn" onclick="geeksportal('Intermediate')">
            Intermediate
          </button>
          <button class="bttn" onclick="geeksportal('Advance')">
            Advance
          </button>
        </div>

        <!--<div class="col-lg-2" style="margin-left: 600px; ">
          <?php echo form_open('course/search') ?>
          <form action="" method="GET" class="input-group mb-8">
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
          </form>
          <?php echo form_close() ?>
        </div>-->

        <div class="col-lg-2" style="margin-left: 600px; ">
          <form action="" method="GET" class="input-group mb-8">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button class="btn btn-outline-secondary" class="title_course" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div><br>

        <div class="dropdown" style="margin-left: 10px; margin-right:0px">
          <button class="btn btn-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item">Harga</a>
            <a class="dropdown-item">Tanggal</a>
            <a class="dropdown-item">Level</a>
          </div>
        </div>
      </div>

      <div class="row g-4 justify-content-center">
        <?php
        if ($course != '') {
          foreach ($course as $item) {

        ?>

            <div class="column Basic col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="course-item" style="background-color:#F0F0F0;box-shadow: 2px 2px 2px grey;">
                <div class=" position-relative overflow-hidden">
                  <a href="course/details_course/<?= $item->course_id ?>">
                    <img class="img-fluid" style="width: 100%; height: 60%;" src="<?php echo base_url() . 'assets/img/course/course1.png' ?>" alt="" /></a>
                  <div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style="padding-top: 5px; ">
                    <?php foreach ($item->category as $itemCategory) { ?>
                      <label class="flex-shrink-0 btn-sm btn-light" style="border-radius: 0 5px 5px 0;"><b><?= $itemCategory->name ?></b></label>
                    <?php } ?>
                  </div>
                  <div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
                    <label class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b><span class="formatPrice"><?= $item->new_price ?></span></b></label>
                  </div>

                </div>
                <div class="text-decoration p-4 pb-0 ">
                  <a href="course/details_course/<?= $item->course_id ?>">
                    <h6 class="mb-3" style="font-size:16px; height:100%; margin: 0px 0px 8px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><b><?= $item->title ?></b></h6>
                  </a>
                  <button type="button" class="btn btn-info mb-4" style="border-radius: 5px; font-weight:bold; width:80%;"><a href="<?php echo base_url() . 'signin' ?>"><b>Buy</b></a></button>
                  <button type="button" class="btn btn-outline-info mb-4" style="border-radius: 5px; font-weight:bold;"><a href="<?php echo base_url() . 'signin' ?>"><i class="bi bi-cart-plus-fill"></i></a></button>
                </div>
              </div>
            </div>

        <?php }
        }
        ?>
      </div>
    </div>
    <!-- JS file -->

    <script src="<?php echo base_url() . 'assets/js/category.js' ?>"></script>
  </section>

  <!-- ======= Paket Bundling ======= -->
  <!--<section id="pricing" class="pricing">
    <div class="container">
      <div class="section-title">
        <h2>Paket Bundling</h2>
        <p style="color:#999; font-size:8px;">
          <center>Menyediakan berbagai paket bundling kursus di bidang Engineering<center>
        </p>
      </div>
      <div class="row g-4 justify-content-center">
        <?php
        if ($bundling != '') {
          foreach ($bundling as $item) {

        ?>
            <div class="col-lg-3 col-md-6 ">
              <div class="box featured">
                <span class="advanced"><?= $item->category_name ?></span>
                <h3><?= $item->title ?></h3>
                <h5 style="text-align:left;">What will you get?</h5>
                <ul>
                  <li><i class="fa fa-check-circle"></i>Bim Introduction & Fundamental Knowlegde</li>
                </ul>
                <h6 style="text-align:left;">Only</h6>
                <h6 style="text-align:left; color:red;"><s><span class="formatPrice"><?= $item->old_price ?></span></s></h6>
                <h4 style="text-align:left;" class="formatPrice"><sup></sup><?= $item->new_price ?></h4>

                <div class="btn-wrap">
                  <a href="course/details_bundling/<?= $item->bundling_id ?>" class="btn-buy">Detail</a>
                </div>
              </div>
            </div>
        <?php }
        }
        ?>
      </div>
    </div>
  </section>
  <!-- End Paket Bundling -->

  <!-- Training Start -->
  <section id="training" class="training">
    <div class="container-xxl py-5">
      <div class="section-title">
        <h2>Training</h2>
        <p style="color:#999; font-size:8px;">
          <center>Layanan training di Bidang Engineering<center>
        </p>
      </div>
      <div class="row g-4 justify-content-center">
        <?php for ($i = 0; $i < 4; $i++) : ?>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item" style="background-color:#F0F0F0;box-shadow: 2px 2px 2px grey;">
              <div class=" position-relative overflow-hidden">
                <a href="course/details_training/">
                  <img class="img-fluid" style="width: 100%; height: 60%;" src="<?php echo base_url() . 'assets/img/training/training-3.jpg' ?>" alt="" /></a>
                <!--<div class="w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style="padding-top: 5px; ">
                  <label class="flex-shrink-0 btn-sm btn-light" style="border-radius: 0 5px 5px 0;"><b>Basic</b></label>
                </div>-->
                <div class="w-100 d-flex position-absolute bottom-0 start-0 mb-4" style="padding-bottom: 5px; justify-content: right">
                  <label class="flex-shrink-0 btn-sm btn-dark px-3 border-end" style="color: #fff; font-size: 14px"><b>Rp 300.000</b></label>
                </div>

              </div>
              <div class="text-decoration p-4 pb-0 ">
                <a href="course/details_training/">
                  <h6 class="mb-3" style="font-size:16px; height:100%; margin: 0px 0px 8px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><b>Digital Creative Agency</b></h6>
                </a>
                <button type="button" class="btn btn-info mb-4" style="border-radius: 5px; font-weight:bold; width:100%;"><a href="<?php echo base_url() . 'signin' ?>"><b>Request</b></a></button>
                <!--<button type="button" class="btn btn-outline-info mb-4" style="border-radius: 5px; font-weight:bold;"><a href="<?php echo base_url() . 'signin' ?>"><i class="bi bi-cart-plus-fill"></i></a></button>-->
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- Training End -->

  <!-- About Start -->
  <section id="consulting" class="consulting">
    <div class="container-xxl py-5">
      <div class="container">
        <div class="section-title">
          <h2>Implementation</h2>
          <p style="color:#999; font-size:8px;">
            <center>Layanan konsultasi yang lebih powerfull untuk menyelesaikan permasalahan di perusahaan Anda<center>
          </p>
        </div>
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
            <div class="position-relative h-100">
              <img src="<?php echo base_url() . 'assets/img/course/consul.png' ?>" class="img-fluid img-responsive mx-auto " style="height: 470px; width:520px">
            </div>
          </div>
          <div class="col-lg-6">
            <p>Anda memerlukan layanan konsultasi yang lebih powerfull untuk menyelesaikan permasalahan di perusahaan Anda? <br>
              Dapatkan beberapa benefit, antara lain:</p>
            <div class="row gy-2 gx-4 mb-4">
              <div class="col-md-12">
                <h5 class="mb-6"><i class="fa fa-check-circle text-info"></i><b> Konsultasi Langsung Dengan Ahli</b></h5>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
              </div>
              <div class="col-md-12">
                <h5 class="mb-6"><i class="fa fa-check-circle text-info"></i><b> Waktu Fleksibel</b></h5>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>

              </div>
              <div class="col-md-12">
                <h5 class="mb-6"><i class="fa fa-check-circle text-info"></i><b> Metode Lintas Disiplin</b></h5>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <button type="button" class="btn btn-info">
          <a href="https://api.whatsapp.com/send?phone=628112632799&text=" style="color: #000; text-decoration: none; display: block; width: 200px; border-radius: 5px;"><b>Hubungi Kami</b></a>
        </button>
      </div>
    </div>
  </section>
  <!-- About End -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <!--<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p>
          <center>Kumpulan pertanyaan yang bisa Anda akses untuk mengenal kami<center>
        </p>
      </div>

      <ul class="faq-list accordion" data-aos="fade-up">

        <li>
          <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1"><b>Apakah seorang pemula bisa ikut belajar?</b> <i class="fa fa-angle-down icon-show"></i><i class="fa fa-angle-up icon-close"></i></a>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
              Tentu saja boleh, karena kami menyediakan kursus untuk berbagai level mulai dari Basic, Intermediate, hingga Advance.
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed"><b>Bolehkah saya bertanya sebuah pertanyaan?</b> <i class="fa fa-angle-down icon-show"></i><i class="fa fa-angle-up icon-close"></i></a>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed"><b>Bolehkah saya bertanya sebuah pertanyaan?</b> <i class="fa fa-angle-down icon-show"></i><i class="fa fa-angle-up icon-close"></i></a>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq">
    <div class="container">
      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p>
          <center>Kumpulan pertanyaan yang bisa Anda akses untuk mengenal kami<center>
        </p>
      </div>

      <div class="accordion">
        <div class="accordion-content">
          <header>
            <span class="title">Apakah seorang pemula bisa ikut belajar?</span>
            <i class="fa-solid fa-plus"></i>
          </header>

          <p class="description">
            Tentu saja boleh, karena kami menyediakan kursus untuk berbagai level mulai dari Basic, Intermediate, hingga Advance.
          </p>
        </div>

        <div class="accordion-content">
          <header>
            <span class="title">What do you mean by Accordion?</span>
            <i class="fa-solid fa-plus"></i>
          </header>

          <p class="description">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus nobis ut perspiciatis minima quidem nisi, obcaecati, delectus consequatur fuga nostrum iusto ipsam ducimus quibusdam possimus. Maiores non enim numquam voluptatem?
          </p>
        </div>
        <div class="accordion-content">
          <header>
            <span class="title">What do you mean by Accordion?</span>
            <i class="fa-solid fa-plus"></i>
          </header>

          <p class="description">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus nobis ut perspiciatis minima quidem nisi, obcaecati, delectus consequatur fuga nostrum iusto ipsam ducimus quibusdam possimus. Maiores non enim numquam voluptatem?
          </p>
        </div>
        <div class="accordion-content">
          <header>
            <span class="title">What do you mean by Accordion?</span>
            <i class="fa-solid fa-plus"></i>
          </header>

          <p class="description">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus nobis ut perspiciatis minima quidem nisi, obcaecati, delectus consequatur fuga nostrum iusto ipsam ducimus quibusdam possimus. Maiores non enim numquam voluptatem?
          </p>
        </div>
      </div>

      <script src="<?php echo base_url() . 'assets/js/faq.js' ?>"></script>


    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <?php $this->load->view('footer'); ?>

  <div id="preloader"></div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Button Whatsapp -->
  <a href="https://api.whatsapp.com/send?phone=628112632799&text=" class="btn btn-info" target="_blank" style="position: fixed;
	right: 70px;
	bottom: 15px;
  height :40px; z-index:99"><i class="bi bi-whatsapp" style="margin-right: 5px;"></i>Hubungi Kami</a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() . 'assets/vendor/purecounter/purecounter_vanilla.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/aos/aos.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/glightbox/js/glightbox.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/isotope-layout/isotope.pkgd.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/swiper/swiper-bundle.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/waypoints/noframework.waypoints.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/php-email-form/validate.js' ?>"></script>


  <!-- javaScrip-->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() . 'assets/js/main.js' ?>"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
  <script src="<?php echo base_url() . 'assets/js/jquery.priceformat.js' ?>"></script>
  <!--Hide
  <script>
    function getCourse() {
      $.ajax({
        type: "GET",
        url: "<?= $this->config->item('url_server') ?>api/course",

        dataType: "JSON",
        success: function(data) {
          if (data != '') {
            for (var i = 0; i <= 4; i++) {

              $(`.row.g-4.justify-content-center.course-utama`).append(` <div class = "row" >
                        <div class = "column Basic col-lg-3 col-md-6 wow fadeInUp" data-wow-delay = "0.1s" data - id = "'+data[i].course_id+')" >
                        <div class = "course-item" style = "background-color:#F0F0F0;" >
                        <div class = " position-relative overflow-hidden" >
                        <a href = "<?php echo base_url() . 'course/details_course' ?>" > < img class = "img-fluid" style = "width: 100%; height: 60%;" src = "<? $this->config->item('url_server') . 'api/course/' ?>" alt = "" / > < /a>  
                        <div class = "w-100 d-flex justify-content-left position-absolute top-0 start-0 mb-4" style = "padding-top: 5px; " >
                        <label class = "flex-shrink-0 btn-sm btn-light" style = "border-radius: 0 5px 5px 0;" > < b > Basic < /b></label >
                        </div>  
                        <div class = "w-100 d-flex position-absolute bottom-0 start-0 mb-4" style = "padding-bottom: 5px; justify-content: right" >
                        <label class = "flex-shrink-0 btn-sm btn-dark px-3 border-end" style = "color: #fff; font-size: 14px" > < b > ` + data[i].new_price + ` < /b></label >
                        </div> </div> 
                        <div class = "text-decoration p-4 pb-0 ">
                        <h6 class = "mb-3" > < b > Introducing to BIM < /b></h6 >
                        <button type = "button" class = "btn btn-warning mb-4" style = "border-radius: 5px; font-weight:bold; width:80%;" > < a href = "#" > < b > Buy < /b></a > < /button>  
                        <button type = "button" class = "btn btn-outline-warning mb-4" style = "border-radius: 5px; font-weight:bold;" > < a href = "#" > < i class = "bi bi-cart-plus-fill" > < /i></a > < /button>  
                        </div>
                        </div>
                        </div>`);
            }
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {}
      });
    }

    $(document).ready(function() {
      getCourse();
    })
  </script>
  < -- Hide -->

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