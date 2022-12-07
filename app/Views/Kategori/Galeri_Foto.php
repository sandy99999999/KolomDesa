<?= $this->include('Layout2/Header2') ?>

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
<?= $this->include('Layout2/Footer2') ?>