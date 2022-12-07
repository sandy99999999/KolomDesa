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
    <link href="<?= base_url('assets5') ?>/css/style.css" rel="stylesheet">
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
                    <div class="btn-group">

                    </div>
                    <div class="btn-group mx-2">

                    </div>
                    <div class="btn-group">

                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">

                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="http://localhost:8888/KolomDesa/public/" class="text-decoration-none">
                    <span class="h1 text-uppercase text-danger bg-whith px-2">KOLOM</span>
                    <span class="h1 text-uppercase text-secondary bg-success px-2 ml-n1">DESA </span>
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
                            <button type="submit" class="input-group-text bg-transparent text-success fa fa-search" name="cari">
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
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Berita<i class=""></i></a>
                                <div class="dropdown-menu bg-success rounded-0 border-0 m-0">
                                    <li><a href="<?= base_url() ?>/Internasional" class="dropdown-item">INTERNASIONAL</a></li>
                                    <li><a href="<?= base_url() ?>/Nasional" class="dropdown-item">NASIONAL</a></li>
                                    <li><a href="<?= base_url() ?>/Daerah" class="dropdown-item">DAERAH</a></li>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Budaya<i class=""></i></a>
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
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeri <i class=""></i></a>
                                <div class="dropdown-menu bg-success rounded-0 border-0 m-0">
                                    <a href="<?= base_url() ?>/Foto" class="dropdown-item">FOTO</a>
                                    <a href="<?= base_url() ?>/Video" class="dropdown-item">VIDEO</a>
                                </div>
                            </div>
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
</body>
<!-- Navbar End -->