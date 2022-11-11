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

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">

  <!-- ===== Fontawesome CDN Link ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>

<body>
  <?php $this->load->view('course/header_co'); ?>
  <br>

  <style>
    .detail-img {
      max-width: 500px;
    }
  </style>
  <section id="detail-training">
    <div class="container">
      <div class="title text-center mt-5 mb-lg-5 pb-4 fw-bold h3">Training Softskill</div>
      <div class="row mb-5">
        <div class="col-lg-6 overflow-hidden">
          <img src="<?php echo base_url() . 'assets/img/training/training-3.jpg' ?>" alt="" class="detail-img">
        </div>
        <div class="col-lg-6 mt-sm-4">
          <!-- <div class="h5 fw-bold mb-3">Penjelasan Course</div> -->

          <div class="h5 fw-bold mb-3">Penjelasan Training</div>
          <p style="text-align:justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam nulla porttitor massa id neque. Dui vivamus arcu felis bibendum ut.
          </p>
          <div class="row mb-4">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6 col-sm-9 d-block ">
                  <div class="text-decoration-line-through text-secondary"><small>Rp 500.000</small></div>
                  <div class="h5 fw-bold text-danger">Rp 325.000</div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-lg-6 col-sm-3 text-sm-start">
                  <a href="<?php echo base_url() . 'signin' ?>"><button type="button" class="btn btn-lg btn-info" style="width: 200px">Request Now</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Courses Start -->
  <div class="container py-5">
    <div class="other d-flex">
      <h5 class="align-item-justify">Similiar Training</h5>
      <!--Hide
            <h6 class="text-end"><a href="<?php echo base_url() . 'course' ?>">Tampilkan Lainnya</a></h6>
            <--Hide-->
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
  <!-- Courses End -->

  <?php $this->load->view('footer'); ?>

</body>

</html>