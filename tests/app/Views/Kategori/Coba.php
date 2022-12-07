<?= $this->extend('Layout/Template');?>

<?= $this->section('content'); ?>
<!-- partial -->
<div class="flash-news-banner">
  <div class="container">
    <div class="d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <span class="badge badge-dark mr-3">Flash news</span>
        <p class="mb-0">
        </p>
      </div>
      <div class="d-flex">
        <span class="mr-3 text-danger">Wed, March 4, 2020</span>
        <span class="text-danger">30°C,London</span>
      </div>
    </div>
  </div>
</div>
<div class="content-wrapper">
  <div class="container">
    <div class="col-sm-12">
      <div class="card" data-aos="fade-up">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="font-weight-600 mb-4">
                coba
              </h1>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 ">
              <div class="row">
                <?php $no =' '; foreach ($list_berita as $brt):  ?>
                <div class="col-sm-3 mb-4">
                  <div class="rotate-img">
                    <img
                    src="<?=  $brt->gambar; ?>" 
                    alt="banner"
                    class="img-fluid"
                    />
                  </div>
                </div>
                <div class="col-sm-8 mb-4">
                  <h2>
                    <a href="<?= base_url("/detail/internasional/$brt->id_berita")?>" class="mtext-101 cl2 hov-cl1 trans-04">
                          <?= $brt->judul_berita ?>
                    </a>
                  </h2>
                  <!--  <a href="<= base_url('berita/detail/' . $br->id_berita . '/' . $br->judul_seo) ?>" class="mtext-101 cl2 hov-cl1 trans-04">
                      <= $br->judul ?>
                   </a> -->
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="col-lg-4">
            <h2 class="mb-4 text-primary font-weight-600">
              Latest news
            </h2>
            <div class="row">
              <div class="col-sm-12">
                <div class="border-bottom pb-4 pt-4">
                  <div class="row">
                    <div class="col-sm-8">
                      <h5 class="font-weight-600 mb-1">
                        Ways to stay social online while in self..
                      </h5>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </p>
                    </div>
                    <div class="col-sm-4">
                      <div class="rotate-img">
                        <img
                        src="assets/images/magazine/Magzine_1.jpg"
                        alt="banner"
                        class="img-fluid"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="border-bottom pb-4 pt-4">
                  <div class="row">
                    <div class="col-sm-8">
                      <h5 class="font-weight-600 mb-1">
                        Premier League players join charity..
                      </h5>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </p>
                    </div>
                    <div class="col-sm-4">
                      <div class="rotate-img">
                        <img
                        src="assets/images/magazine/Magzine_2.jpg"
                        alt="banner"
                        class="img-fluid"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="pt-4">
                  <div class="row">
                    <div class="col-sm-8">
                      <h5 class="font-weight-600 mb-1">
                        UK Athletics board changed stance on..
                      </h5>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </p>
                    </div>
                    <div class="col-sm-4">
                      <div class="rotate-img">
                        <img
                        src="assets/images/magazine/Magzine_3.jpg"
                        alt="banner"
                        class="img-fluid"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="trending">
              <h2 class="mb-4 text-primary font-weight-600">
                Trending
              </h2>
              <div class="mb-4">
                <div class="rotate-img">
                  <img
                  src="assets/images/magazine/Magzine_4.jpg"
                  alt="banner"
                  class="img-fluid"
                  />
                </div>
                <h3 class="mt-3 font-weight-600">
                  Virus Kills Member Of Advising Iran’s Supreme
                </h3>
                <p class="fs-13 text-muted mb-0">
                  <span class="mr-2">Photo </span>10 Minutes ago
                </p>
              </div>
              <div class="mb-4">
                <div class="rotate-img">
                  <img
                  src="assets/images/magazine/Magzine_5.jpg"
                  alt="banner"
                  class="img-fluid"
                  />
                </div>
                <h3 class="mt-3 font-weight-600">
                  Virus Kills Member Of Advising Iran’s Supreme
                </h3>
                <p class="fs-13 text-muted mb-0">
                  <span class="mr-2">Photo </span>10 Minutes ago
                </p>
              </div>
              <div class="mb-4">
                <div class="rotate-img">
                  <img
                  src="assets/images/magazine/Magzine_6.jpg"
                  alt="banner"
                  class="img-fluid"
                  />
                </div>
                <h3 class="mt-3 font-weight-600">
                  Virus Kills Member Of Advising Iran’s Supreme
                </h3>
                <p class="fs-13 text-muted mb-0">
                  <span class="mr-2">Photo </span>10 Minutes ago
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- main-panel ends -->
<!-- container-scroller ends -->



<?= $this->endSection(); ?>

