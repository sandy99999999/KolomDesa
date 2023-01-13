<title>Galeri - Foto</title>

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


<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">
    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
      <h2>Galeri Foto</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
    <div class="row">
      <?php foreach ($foto as $row => $brt) { ?>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="member" data-aos="fade-up">
            <div class="pic">
              <a href="<?= base_url('Foto/detail/' . $brt->id_foto); ?>">
                <img src="<?= base_url('Berita/' . $brt->list_foto); ?>" class="img-fluid" alt="" style="width: 400px; height: 200px; object-fit: cover;">
              </a>
            </div>
            <div class="member-info mb-2 ">
              <h4><?= $brt->judul_foto; ?></h4>
              <span><?= $brt->created_at; ?></span>
              <div class="social">
                <a href="<?= base_url('Foto/detail/' . $brt->id_foto); ?>"><i>Selengkapnya..</i></a>
                <!-- <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a> -->
                <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section><!-- End Team Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Portfolio</h2>
      <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Berita</li>
          <li data-filter=".filter-card">Budaya</li>
          <li data-filter=".filter-web">Inovasi Desa</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">App 1</a></h4>
            <p>App</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Web 3</a></h4>
            <p>Web</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">App 2</a></h4>
            <p>App</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-4.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Card 2</a></h4>
            <p>Card</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-5.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Web 2</a></h4>
            <p>Web</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-6.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">App 3</a></h4>
            <p>App</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-7.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Card 1</a></h4>
            <p>Card</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-8.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Card 3</a></h4>
            <p>Card</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <figure>
            <img src="D/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <a href="assets/img/portfolio/portfolio-9.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="portfolio-details.html">Web 1</a></h4>
            <p>Web</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?= $this->include('Layout4/Footer') ?>