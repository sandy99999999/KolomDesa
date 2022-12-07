<?= $this->include('Layout2/Header2') ?>

<!-- ======= Testimonials Section ======= -->
<section class="testimonials bg-whith">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title" data-aos="fade-in" data-aos-delay="20">
          <h2>Tokoh Desa</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="testimonials-slider swiper mt-2 cpl-lg-12" data-aos="fade-in" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach ($list_berita as $row => $brt) { ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p class="alert-dark">
                    <i class="bx bxs-quote-alt-left quote-icon-left "></i>
                    " <?= $brt->sub_judul ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <a href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                    <img src="<?= base_url('Berita/' . $brt->gambar); ?>" class="testimonial-img" alt="..." style="width: 80px; height: 80px; object-fit: cover;">
                  </a>
                  <h3><?= $brt->ket_gambar; ?></h3>
                  <!-- <h4>Ceo &amp; Founder</h4> -->
                </div>

              </div><!-- End testimonial item -->
            <?php } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Testimonials Section -->

<?= $this->include('Layout2/Footer2') ?>