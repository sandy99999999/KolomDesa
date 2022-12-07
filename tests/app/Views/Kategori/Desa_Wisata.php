<?= $this->extend('Layout/Template');?>

<?= $this->section('content'); ?>
  <!-- partial -->
        <div class="container mb-4">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="index.html" class="text-dark stext-109 cl8 hov-cl1 trans-04 fa fa-home">
                    Beranda
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <a href="blog.html" class="text-dark stext-109 cl8 hov-cl1 trans-04">
                    Berita
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

            </div>
        </div>

  <div class="container-fluid mb-500">
    <div class="row px-xl-5 mb-500">
      <div class="container-fluid mb-3">
        <div class="row px-xl-3">
        <div class="col-lg-8">
            <h3 class="font-weight-600 mb-4">
                        Desa Wisata
                      </h3>
                      <?php foreach ($list_berita as $row => $brt) { ?>
                          <div class="row">
                            <div class="col-sm-6 grid-margin mb-4">
                              <div class="rotate-img">
                                <img
                                  src="<?= $brt->gambar; ?>"
                                  alt="banner"
                                  class="img-fluid"/>
                              </div>
                            </div>
                            <div class="col-sm-6 grid-margin mb-4">
                              <h4 class="font-weight-600 mb-2 ">
                                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <?= $brt->judul_berita; ?>
                                </a>
                              </h4>
                              <p class="fs-13 text-muted mb-0">
                                <!-- <span class="mr-2">Photo </span>10 Minutes ago -->
                              </p>
                              <p class="fs-15  far fa-clock">
                                <?= $brt->created_at; ?>
                              </p>
                            </div>
                          </div>
                          <?php } ?>
        </div>
        <div class="col-lg-4 mb-4">
            <a class="btn btn-outline-success mb-4 text-dark  " href="#">Trending</a>
                    <div class="row ">
                        <?php foreach ($pilihan as $row => $brt) { ?>
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
                            <div class="col-sm-4 mb-4">
                                <div class="rotate-img">
                                  <img
                                    src="<?= $brt->gambar; ?>"
                                    alt="banner"
                                    class="img-fluid"/>
                                    
                                </div>
                            </div>
                            
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            
        </div>
        <div class="col-lg-4 mb-4">
            <a class="btn btn-outline-success mb-4 text-dark  " href="#">Terpopuler</a>
                    <div class="row ">
                        <?php foreach ($berita_utama as $row => $brt) { ?>
                            
                            <div class="col-sm-8 mb-4">
                                <h6 class="font-weight-600 mb-1">
                                 <?= $brt->judul_berita; ?>
                                </h6>
                                <p class="fs-13 text-muted mb-0">
                                  <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                                </p>
                              </div>
                              <div class="col-sm-4 mb-4">
                                <div class="rotate-img">
                                  <img
                                    src="<?= $brt->gambar; ?>"
                                    alt="banner"
                                    class="img-fluid"/>
                                    
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


           



<?= $this->endSection(); ?>