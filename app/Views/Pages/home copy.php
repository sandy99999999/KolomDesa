<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<!-- Carousel Start -->
<div class="container-fluid mb-4">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($headline as $row => $brt) { ?>
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="<?= base_url('Berita/' . $brt->gambar); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Headline</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?= $brt->judul_berita; ?></p>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?= $brt->created_at; ?></p>
                                    <a class="btn btn-outline-success text-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">Selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

      
        <div class="col-lg-4">
            <div class="row ">
                <?php foreach ($headline1 as $row => $brt) { ?>
                    <div class="col-sm-4 mb-4">
                        <div class="rotate-img">
                           
                            <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" style="height: 80px;">

                        </div>
                    </div>
                    <div class="col-sm-8 mb-4">
                        <h6 class="font-weight-600 mb-1">
                            <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                            </a>
                        </h6>
                        <p class="fs-13 text-muted mb-0">
                            <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<div class="container-fluid mb-4">
    <div class="row px-xl-5">
        <div class="col-lg-4">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($pilihan as $row => $brt) { ?>
                        <div class="carousel-item position-relative active" style="height: 480px;">
                            <img class="position-absolute w-100 h-100" src="<?= base_url('Berita/' . $brt->gambar); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                                <div class="p-2">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Trending</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?= $brt->judul_berita; ?></p>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn"><?= $brt->created_at; ?></p>
                                    <a class="btn btn-outline-success text-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">Selengkapnya...</a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Trending</a>

            <div class="row ">

                <?php foreach ($pilihan1 as $row => $brt) { ?>
                    <div class="col-sm-6 mb-2">
                        <div class="rotate-img">
                            <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <h6 class="font-weight-600 mb-1">
                            <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                            </a>
                        </h6>
                        <p class="fs-13 text-muted mb-0">
                            <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>


        </div>
        <div class="col-lg-4">
            <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Trending</a>

            <div class="row ">
                <?php foreach ($pilihan2 as $row => $brt) { ?>
                    <div class="col-sm-4 mb-4">
                        <div class="rotate-img">
                            <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" style="height: 60px;" style="height: 70px;">

                        </div>
                    </div>
                    <div class="col-sm-8 mb-4">
                        <h6 class="font-weight-600 mb-1">
                            <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                            </a>
                        </h6>
                        <p class="fs-13 text-muted mb-0">
                            <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<!-- baris 3 -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">

        <div class="col-lg-4">
            <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Populer</a>
            <?php foreach ($berita_utama as $row => $brt) { ?>
                <div class="mb-4">
                    <div class="rotate-img">
                        <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                    </div>
                    <p class="fs-13 text-muted mb-0">
                        <small class="mr-2 far fa-clock  "> <?= $brt->created_at; ?></small>
                    </p>
                    <h3 class="mt-3 font-weight-600 mt-2">
                        <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                            <?= $brt->judul_berita; ?>
                        </a>
                    </h3>

                </div>
            <?php } ?>
        </div>

        <div class="col-lg-4">
            <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Populer</a>
            <div class="row ">
                <?php foreach ($berita_utama1 as $row => $brt) { ?>
                    <div class="col-sm-6 mb-4">
                        <div class="rotate-img">
                            <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h6 class="font-weight-600 mb-1">
                            <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                            </a>
                        </h6>
                        <p class="fs-13 text-muted mb-0">
                            <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>


        </div>
        <div class="col-lg-4">
            <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Populer</a>
            <div class="row ">
                <?php foreach ($berita_utama2 as $row => $brt) { ?>
                    <div class="col-sm-3 mb-4">
                        <div class="rotate-img">
                            <img style="width: 80px;" src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-8 mb-4">
                        <h6 class="font-weight-600 mb-1">
                            <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                            </a>
                        </h6>
                        <p class="fs-13 text-muted mb-0">
                            <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- baris 4 -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Berita Terkini</a>
            <div class="row ">
                <?php foreach ($berita as $row => $brt) { ?>
                    <div class="col-sm-4 mb-4">
                        <div class="rotate-img">
                            <img style="width: 300px;" src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-8 mb-4">
                        <h3 class="font-weight-600 mb-1">
                            <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                            </a>
                        </h3>
                        <p class="fs-13 text-muted mb-0">
                            <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-4">
            <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Populer</a>
            <div class="row ">
                <?php foreach ($berita_utama2 as $row => $brt) { ?>
                    <div class="col-sm-3 mb-4">
                        <div class="rotate-img">
                            <img style="width: 80px;" src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-8 mb-4">
                        <h6 class="font-weight-600 mb-1">
                            <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                            </a>
                        </h6>
                        <p class="fs-13 text-muted mb-0">
                            <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>



<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Galeri Foto</span></h2>
    <div class="row px-xl-5">

        <?php foreach ($foto as $row => $brt) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">

                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="">
                        <div class="product-action">
                            <!--  <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a> -->
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h6 class="font-weight-600 mb-2 ">
                        <a class="h6 text-decoration-none text-truncate" href=""><?= $brt->ket_gambar; ?></a>
                    </h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>

                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Video</span></h2>
    <div class="row px-xl-5">
        <?php foreach ($video as $row => $v) { ?>
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9" style="height: 300px;">
                    <iframe width="650" height="400" src="<?= $v; ?>"> </iframe>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Offer End -->



<?= $this->endSection(); ?>