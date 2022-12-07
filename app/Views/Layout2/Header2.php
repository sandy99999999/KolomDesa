<head>
    <meta charset="utf-8">
    <title>Home - KOLOM DESA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('13') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('13') ?>/css/style.css" rel="stylesheet">

    <link href="<?= base_url('11') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('11') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('11') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- <link href="<= base_url('11') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <!-- <link href="<= base_url('11') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
    <link href="<?= base_url('11') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('11') ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-primary mt-2"> -->
    <!-- <div class="row align-items-center alert-dark px-lg-5"> -->
    <div class="row align-items-center alert-dark px-lg-5 mt-2">
        <div class="col-lg-12 col-md-8">
            <div class="container">
                <div class="d-flex justify-content-between ">
                    <div class="bg-success text-light text-center py-2 col-lg-2" style="width: 300px;">KOLOM DOSA</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel text-dark position-relative d-inline-flex align-items-center ml-2" style="width: calc(100% - 100px); padding-left: 90px;">
                        <div class="text-truncate"> Suara Desa, Suara Indonesia </div>
                        <div class="text-truncate"> Suara Desa, Suara Indonesia </div>
                        <div class="text-truncate"> Suara Desa, Suara Indonesia </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-2 text-right text-dark d-none d-md-block">
            <div class="navbar-nav m-auto">
                <div class="social">
                    <a href=""><i class="text-dark fab fa-twitter"></i></a>
                    <a href=""><i class="text-dark fab fa-facebook"></i></a>
                    <a href=""><i class="text-dark fab fa-linkedin"></i></a>
                    <a href=""><i class="text-dark fab fa-instagram"></i></a>
                    <a href=""><i class="text-dark fab fa-youtube"></i></a>
                </div>
            </div>
        </div> -->
    </div>
    <!-- </div> -->

    <div class="container-fluid bg-light py-2">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-3">
                    <div class="row">
                        <a href="<?= base_url('/') ?>" class="navbar-brand d-none d-lg-block">
                            <img class="img-fluid" style="hight: 6rem; width: 12rem;" src="<?= base_url('Logo') ?>/kolomdes.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-right mt-4 mr-5 ml-2">
                    <div class="row">
                        <form action="<?php echo base_url('/pencarian') ?>" method="GET">
                            <div class="col-12">
                                <input type="text" class="form-control rounded-pill ml-6" placeholder="Cari Berita, Tokoh, Desa Wisata.." name="cari">
                                <!-- <button><i class="fa fa-search"></i></button> -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 ml-4 d-md-block ">
                    <div class="nav-item text-right">
                        <!-- <div class="social"> -->
                        <a href=""><i class="text-dark fab fa-twitter"></i></a>
                        <a href=""><i class="text-dark fab fa-facebook"></i></a>
                        <!-- <a href=""><i class="text-dark fab fa-linkedin"></i></a> -->
                        <a href=""><i class="text-dark fab fa-instagram"></i></a>
                        <a href=""><i class="text-dark fab fa-youtube"></i></a>
                        <!-- </div> -->
                    </div>
                </div>
                <!-- <div class="col-lg-1 ">
                    <div class="nav-item ">
                        <a href="#" class="text-dark dropdown-toggle " data-toggle="dropdown">My Account</a>
                        <div class="dropdown-menu bg-info">
                            <li><a href="<?= base_url() ?>/login" class="dropdown-item">Sign In</a></li>
                            <li><a href="<?= base_url() ?>/register" class="dropdown-item">Sign Up</a></li>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid bg-light p-0  ">
        <nav class="navbar navbar-expand-lg bg-success navbar-light py-2 py-lg-0 px-lg-5 ">
            <a href="<?= base_url('/') ?>" class="navbar-brand d-block d-lg-none">
                <img class="img-fluid" style="width: 13rem;" src="<?= base_url('Logo') ?>/kolomdes.png" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto">
                    <div class="nav-item dropdown mr-4">
                        <a href="#" class=" nav-link text-light dropdown-toggle" data-toggle="dropdown">BERITA</a>
                        <div class="dropdown-menu bg-success rounded-0 border-0 m-0">
                            <li><a href="<?= base_url() ?>/Internasional" class="dropdown-item">INTERNASIONAL</a></li>
                            <li><a href="<?= base_url() ?>/Nasional" class="dropdown-item">NASIONAL</a></li>
                            <li><a href="<?= base_url() ?>/Daerah" class="dropdown-item">DAERAH</a></li>
                        </div>
                    </div>
                    <a href="<?= base_url() ?>/Jajanan" class="nav-item text-light nav-link mr-3">JAJANAN</a>
                    <a href="<?= base_url() ?>/Tradisi" class="nav-item text-light nav-link mr-3">TRADISI</a>
                    <a href="<?= base_url() ?>/Analisa" class="nav-item text-light nav-link mr-3">ANALISA</a>
                    <a href="<?= base_url() ?>/Desa_Wisata" class="nav-item nav-link text-light mr-4">DESA WISATA</a>
                    <a href="<?= base_url() ?>/Tokoh_Desa" class="nav-item text-light text-light nav-link mr-4">TOKOH DESA</a>
                    <a href="<?= base_url() ?>/Bum_Desa" class="nav-item text-light nav-link mr-3">BUM DESA</a>
                    <a href="<?= base_url() ?>/Kabar_Desa" class="nav-item text-light nav-link mr-4">KABAR DESA</a>
                    <div class="nav-item dropdown mr-3">
                        <a href="#" class="nav-link text-light dropdown-toggle" data-toggle="dropdown">GALERI<i class=""></i></a>
                        <div class="dropdown-menu bg-success rounded-0 border-0 m-0">
                            <li><a href="<?= base_url() ?>/Foto" class="dropdown-item">FOTO</a></li>
                            <li><a href="<?= base_url() ?>/Video" class="dropdown-item">VIDEO</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>
<!-- Navbar End -->