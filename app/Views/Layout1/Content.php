<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home - KOLOM DESA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Logo/K.png" rel="icon">
    <link href="Logo/K" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="A/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="A/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="A/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="A/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="A/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: EstateAgency - v4.10.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<?= $this->include('Layout1/Header') ?>

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(Banner/foto-desa.jpeg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title-top">
                                        <a class="intro-title text-success badge bg-white" role="alert">SELAMAT DATANG</a>
                                    </h1>
                                    <h1 class="intro-title mb-4 ">
                                        <!-- <span class="color-b alert alert-dark">SELAMAT DATANG</span> -->
                                        <!-- <br> -->
                                        <h2 class="text-light"> Suara Desa, Suara Indonesia</h2>
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?= base_url('/'); ?>"><span class="btn btn-warning text-dark">Jelajahi</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(Banner/download.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="">
                                        <h1 class="intro-title text-light badge bg-success"> U s a h a D e s a</h1>
                                    </h1>
                                    <h1 class="intro-title mb-4 ">
                                        <!-- <span class="color-b alert alert-dark">SELAMAT DATANG</span> -->
                                        <!-- <br> -->
                                        <h2 class="text-light">Kegiatan usaha ekonomi, serta pengembangan investasi, dan potensi Desa.
                                        </h2>
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?= base_url('/Bum_Desa'); ?>"><span class="btn btn-warning text-dark">Jelajahi</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(Banner/desa-wisata.jpeg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title-top">
                                        <h1 class="intro-title text-warning badge bg-white">D e s a W i s a t a</h1>
                                    </h1>
                                    <h1 class="intro-title mb-4 ">
                                        <!-- <span class="color-b alert alert-dark">SELAMAT DATANG</span> -->
                                        <!-- <br> -->
                                        <h2 class="text-light">Desa Wisata Menyajikan, Keharmonisan, dan kearifan budaya lokal</h2>
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?= base_url('Desa_Wisata'); ?>"><span class="btn btn-warning text-dark">Jelajahi</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">

    <!-- ======= Latest Properties Section ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-single-box mb-4">
                        <div class="title-single">
                            <h2 class="title-a">Budaya</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper">

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($jajanan as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>">
                                        <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt=".." class=" img-fluid">
                                    </a>
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>JAJANAN</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($tradisi as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>TRADISI</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($jajanan1 as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>JAJANAN</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($tradisi1 as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>TRADISI</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->
                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
    </section><!-- End Latest Properties Section -->

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-single-box mb-4">
                        <div class="title-single">
                            <h2 class="title-a">Desa Wisata</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="news-carousel" class="swiper">
                <div class="swiper-wrapper">
                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($dw as $row => $dw) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $dw->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Wisata Alam</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $dw->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($dw1 as $row => $dw) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $dw->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Wisata Buatan</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $dw->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($dw2 as $row => $dw) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $dw->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Wisata Edukasi</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $dw->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($dw3 as $row => $dw) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $dw->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <a href="#" class="category-b">Wisata Edukasi</a>
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $dw->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->
                </div>
            </div>
            <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
    </section><!-- End Latest News Section -->

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-single-box mb-4">
                        <div class="title-single">
                            <h2 class="title-a">BUM Desa</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div id="news-carousel" class="swiper">
                <div class="swiper-wrapper">
                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($bumdesa as $row => $bumdes) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $bumdes->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <!-- <a href="#" class="category-b">Wisata Alam</a> -->
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $bumdes->id_berita); ?>"><?= $bumdes->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $bumdes->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($bumdesa1 as $row => $bumdes) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $bumdes->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <!-- <a href="#" class="category-b">Wisata Buatan</a> -->
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $bumdes->id_berita); ?>"><?= $bumdes->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $bumdes->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($bumdesa2 as $row => $bumdes) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $bumdes->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <!-- <a href="#" class="category-b">Wisata Edukasi</a> -->
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $bumdes->id_berita); ?>"><?= $bumdes->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $bumdes->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <?php foreach ($bumdesa3 as $row => $bumdes) { ?>
                                <div class="img-box-b">
                                    <img src="<?= base_url('Berita/' . $bumdes->gambar); ?>" style="height: 350px ;" alt="" class="img-b img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-header-b">
                                        <div class="card-category-b">
                                            <!-- <a href="#" class="category-b">Wisata Edukasi</a> -->
                                        </div>
                                        <div class="card-title-b">
                                            <h2 class="title-2">
                                                <a href="<?= base_url('berita/detail/' . $bumdes->id_berita); ?>"><?= $bumdes->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-date">
                                            <span class="date-b"><?= $bumdes->created_at; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->
                </div>
            </div>
            <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
    </section><!-- End Latest News Section -->

    <!-- ======= Agents Section ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-single-box mb-4">
                        <div class="title-single">
                            <h2 class="title-a">BERITA TERKINI</h2>
                        </div>
                        <!-- <div class="title-link">
                                <a href="agents-grid.html">All Agents
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-d">
                        <?php foreach ($nasional as $row => $brt) { ?>
                            <div class="card-img-d">
                                <img src="<?= base_url('Berita/' . $brt->gambar); ?>" style="height: 450px;" class=" img-d ">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="<?= base_url('berita/detail/' . $brt->id_berita); ?>" class="link-two">
                                                <?= $brt->judul_berita; ?>
                                            </a>
                                            <!-- style="width: 350px; height: 400px;" -->
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <div class="info-agents color-a">
                                        <a>
                                            <strong><?= $brt->created_at; ?></strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="<?= base_url() ?>/Nasional" class="link-one">
                                                    <b class="text-light" aria-hidden="true"><i>NASIONAL</i></b>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-d">
                        <?php foreach ($daerah as $row => $brt) { ?>
                            <div class="card-img-d">
                                <img src="<?= base_url('Berita/' . $brt->gambar); ?>" style="height: 450px;" class=" img-d ">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="<?= base_url('berita/detail/' . $brt->id_berita); ?>" class="link-two">
                                                <?= $brt->judul_berita; ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <div class="info-agents color-a">
                                        <a>
                                            <strong><?= $brt->created_at; ?></strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="<?= base_url() ?>/Daerah" class="link-one">
                                                    <b class="text-light" aria-hidden="true"><i>DAERAH</i></b>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-d">
                        <?php foreach ($desa as $row => $brt) { ?>
                            <div class="card-img-d">
                                <img src="<?= base_url('Berita/' . $brt->gambar); ?>" style="height: 450px;" class=" img-d">
                            </div>
                            <div class="card-overlay card-overlay-hover">
                                <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                        <h3 class="title-d">
                                            <a href="<?= base_url('berita/detail/' . $brt->id_berita); ?>" class="link-two">
                                                <?= $brt->judul_berita; ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="card-body-d">
                                    <div class="info-agents color-a">
                                        <a>
                                            <strong><?= $brt->created_at; ?></strong>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="<?= base_url() ?>/Desa" class="link-one">
                                                    <b class="text-light" aria-hidden="true"><i>DESA</i></b>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Agents Section -->

    <!-- ======= Latest News Section ======= -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-single-box mb-4">
                        <div class="title-single">
                            <h2 class="title-a">Kabar Dari Desa</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper">

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($kabar as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="#" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>Berita</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($kabar1 as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="#" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>Edukasi</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($kabar2 as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="#" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>Aspirasi</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <?php foreach ($kabar3 as $key => $jj) { ?>
                                <div class="img-box-a">
                                    <img src="<?= base_url('Berita/' . $jj->gambar); ?>" style="height: 400px ;" alt="" class="img-a img-fluid">
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="<?= base_url('berita/detail/' . $jj->id_berita); ?>"><?= $jj->judul_berita; ?></a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <small class="text-light"><?= $jj->created_at; ?></small>
                                            </div>
                                            <a href="#" class="link-a text-warning">Selengkapnya..
                                                <span class="bi bi-chevron-right"></span>
                                            </a>
                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h1 class="card-info-title "><b>TRADISI</b></h1>
                                                    <span>_
                                                        <!-- <sup>2</sup> -->
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }; ?>
                        </div>
                    </div><!-- End carousel item -->
                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Latest Properties Section -->

</main><!-- End #main -->

<?= $this->include('Layout1/Footer'); ?>