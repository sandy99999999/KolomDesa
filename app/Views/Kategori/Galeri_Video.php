<title>Galeri - Video</title>

<?= $this->include('Layout4/Header') ?>

<!-- Top News Slider Start -->
<div class="container-fluid ml-1ß py-3">
  <div class="container">
    <a href="<?= base_url('/') ?>" class="text-dark stext-109 cl8 hov-cl1 trans-04 fa fa-home">
      Beranda
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>
    <a href="blog.html" class="text-dark stext-109 cl8 hov-cl1 trans-04">
      Galeri
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>
  </div>
</div>

<div class="container-fluid ml-1ß py-3">
  <div class="container">
    <div class="row px-xl-3">
      <div class="col-lg-8">
        <h3 class="font-weight-600 mb-4">
          Galeri Video
        </h3>
        <?php foreach ($video as $row => $brt) { ?>
          <div class="row" class="carousel slide carousel-fade mb-30 mb-lg-0">
            <div class="col-sm-11 grid-margin mb-1">
            </div>
            <div class="col-sm-11 mr-3 grid-margin mb-4" class="carousel-item position-relative active" style="height: 450px;">
              <!-- div class="carousel-item position-relative active" style="height: 430px;"> -->
              <div class="rotate-img">

                <iframe width="690" height="450" src="<?= $brt->list_video; ?>" class="d-flex"> </iframe>
                <a class="text-dark mt-4" href="<?= base_url('Video/detail/' . $brt->id_video); ?>">
                  Selengkapnyaa...
                </a>
                <!-- <div class="carousel-caption" style="position: bottom;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"></h1>
                      <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown"></h1>
                      <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                      </p>
                      <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                      </p>
                    </div>
                  </div> -->

              </div>
            </div>
            <div class="col-sm-11 grid-margin mb-4 mt-4">
              <p class="fs-15  far fa-clock">
                <?= $brt->created_at; ?>
              </p>
              <h4 class="font-weight-600 mb-2 ">
                <a class="text-dark" href="<?= base_url('Video/detail/' . $brt->id_video); ?>">
                  <?= $brt->judul_video; ?>
                </a>
              </h4>
              <p class="fs-13 text-muted mb-0">
                <!-- <span class="mr-2">Photo </span>10 Minutes ago -->
              </p>

            </div>
          </div>
        <?php } ?>
      </div>
      <!-- <div class="col-lg-4 mb-4">
        <a class="btn btn-outline-success mb-4 text-dark  " href="#">Trending</a>
        <div class="row ">
          <php foreach ($pilihan as $row => $brt) { ?>
            <div class="col-sm-8 mb-4">
              <h6 class="font-weight-600 mb-1">
                <a class="text-dark" href="<= base_url('berita/detail/' . $brt->id_berita); ?>">
                  <= $brt->judul_berita; ?>
                </a>
              </h6>
              <p class="fs-13 text-muted mb-0">
                <small class="mr-2 far fa-clock"></small><= $brt->created_at; ?>
              </p>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="rotate-img">
                <img src="< $brt->gambar; ?>" alt="banner" class="img-fluid" />

              </div>
            </div>

          <php } ?>
        </div>
        <a class="btn btn-outline-success mb-4 text-dark  " href="#">Terpopuler</a>
        <div class="row ">
          <php foreach ($berita_utama as $row => $brt) { ?>

            <div class="col-sm-8 mb-4">
              <h6 class="font-weight-600 mb-1">
                <a class="text-dark" href="<= base_url('berita/detail/' . $brt->id_berita); ?>">
                  <= $brt->judul_berita; ?>
                </a>
              </h6>
              <p class="fs-13 text-muted mb-0">
                <small class="mr-2 far fa-clock"></small><= $brt->created_at; ?>
              </p>
            </div>
            <div class="col-sm-4 mb-4">
              <div class="rotate-img">
                <img src="<= $brt->gambar; ?>" alt="banner" class="img-fluid" />

              </div>
            </div>
          <php } ?>
        </div>
      </div> -->
    </div>
  </div>
</div>


<?= $this->include('Layout4/Footer') ?>