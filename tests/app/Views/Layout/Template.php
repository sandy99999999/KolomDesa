<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home | KOLOM DESA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="<?= base_url('assets5') ?>/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url('assets5') ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets5') ?>/lib/owlcarousel/assets5/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url('assets5') ?>/css/" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
      <div class="col-lg-6 d-none d-lg-block">
        <div class="d-inline-flex align-items-center h-100">
          <a class="text-body mr-3" href="">About</a>
          <a class="text-body mr-3" href="">Contact</a>
          <a class="text-body mr-3" href="">Help</a>
          <a class="text-body mr-3" href="">FAQs</a>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <!-- <div class="btn-group">
            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">Sign in</button>
              <button class="dropdown-item" type="button">Sign up</button>
            </div>
          </div> -->
          <!-- <div class="btn-group mx-2">
            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">EUR</button>
              <button class="dropdown-item" type="button">GBP</button>
              <button class="dropdown-item" type="button">CAD</button>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">FR</button>
              <button class="dropdown-item" type="button">AR</button>
              <button class="dropdown-item" type="button">RU</button>
            </div>
          </di -->
        </div>
      </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
      <div class="col-lg-4">
        <a href="http://localhost/kolomdesa/public/" class="text-decoration-none">
          <span class="h1 text-uppercase text-danger bg-whith px-2">KOLOM</span>
          <span class="h1 text-uppercase text-secondary bg-success px-2 ml-n1">DOSA </span>
        </a>
      </div>

      <div class="col-lg-1 col-6 text-right mr-5">
        <!-- <p class="m-0">Customer Service</p> -->
        <!-- <h5 class="m-0">+012 345 6789</h5> -->
      </div>


      <div class="col-lg-2 col-6 text-right mr-5">
        <!-- <p class="m-0">Customer Service</p> -->
        <!-- <h5 class="m-0">+012 345 6789</h5> -->
      </div>
      <div class="col-lg-4 ">
        <form action="<?php echo base_url('/pencarian') ?>" method="GET">
          <div class="input-group">
            <div class="input-group-append">
              <button class="input-group-text bg-transparent text-success" name="cari">
                <i class="fa fa-search" type="submit"></i>
              </button>
            </div>
            <input type="text" class="form-control" type="submit" name="cari" placeholder="Cari...">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid bg-success mb-30">
    <div class="row px-xl-5 ">

      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg bg-success navbar-dark py-3 py-lg-0 px-0">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Berita <i class=""></i></a>
                <div class="dropdown-menu bg-success rounded-0 border-0 m-0">
                  <li><a href="<?= base_url() ?>/Internasional" class="dropdown-item">INTERNASIONAL</a></li>
                  <li><a href="<?= base_url() ?>/Nasional" class="dropdown-item">NASIONAL</a></li>
                  <li><a href="<?= base_url() ?>/Daerah" class="dropdown-item">DAERAH</a></li>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Budaya <i class=""></i></a>
                <div class="dropdown-menu bg-success rounded-0 border-0 m-0">
                  <a href="<?= base_url() ?>/Jajanan" class="dropdown-item">JAJANAN</a>
                  <a href="<?= base_url() ?>/Tradisi" class="dropdown-item">TRADISI</a>
                </div>
              </div>
              <a href="<?= base_url() ?>/Analisa" class="nav-item nav-link ">Analisa</a>
              <a href="<?= base_url() ?>/Desa_Wisata" class="nav-item nav-link">Desa Wisata</a>
              <a href="<?= base_url() ?>/Tokoh_Desa" class="nav-item nav-link">Tokoh Desa</a>
              <a href="<?= base_url() ?>/Bum_Desa" class="nav-item nav-link">BUM Desa</a>
              <a href="<?= base_url() ?>/Kabar_Desa" class="nav-item nav-link">Kabar Desa</a>
              <a href="<?= base_url() ?>/Galeri" class="nav-item nav-link">Galeri</a>
            </div>

          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">My Account</button>
            <div class="dropdown-menu dropdown-menu-right">
              <li><a href="<?= base_url() ?>/login" class="dropdown-item">Sign In</a></li>
              <li><a href="<?= base_url() ?>/register" class="dropdown-item">Sign Up</a></li>
            </div>
          </div>
      </div>

      </nav>
    </div>
  </div>
  </div>
  <!-- Navbar End -->



  <?= $this->renderSection('content'); ?>


  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
      <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
        <a href="http://localhost/kolomdesa/public/" class="text-decoration-none">
          <span class="h1 text-uppercase text-danger bg-whith px-2">KOLOM</span>
          <span class="h1 text-uppercase text-secondary bg-success px-2 ml-n1">DESA </span>
        </a>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="row">
          <div class="col-md-4 mb-5">
            <!-- <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
              <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div> -->
          </div>
          <div class="col-md-4 mb-5">
            <!-- <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
              <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
              <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div> -->
          </div>
          <div class="col-md-4 mb-5">
            <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
            <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
            <form action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Email Address">
                <div class="input-group-append">
                  <button class="btn btn-success">Sign Up</button>
                </div>
              </div>
            </form>
            <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
            <div class="d-flex">
              <a class="btn btn-success btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-success btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-success btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-success btn-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
      <div class="col-md-6 px-xl-0">
        <p class="mb-md-0 text-center text-md-left text-secondary">
          &copy; <a class="text-success" href="#">Domain</a>. All Rights Reserved. Designed
          by
          <a class="text-success" href="https://htmlcodex.com">HTML Codex</a>
        </p>
      </div>
      <div class="col-md-6 px-xl-0 text-center text-md-right">
        <img class="img-fluid" src="<? base_url('assets5_template') ?>/img/payments.png" alt="">
      </div>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-success back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets5') ?>/lib/easing/easing.min.js"></script>
  <script src="<?= base_url('assets5') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="<?= base_url('assets5') ?>/mail/jqBootstrapValidation.min.js"></script>
  <script src="<?= base_url('assets5') ?>/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url('assets5') ?>/js/main.js"></script>
</body>

</html>