<title>Desa Wisata</title>
<?= $this->include('Layout4/Header') ?>
<!-- ======= Hero Section ======= -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="height: 530px; ">
    <div class="carousel-item active">
      <img src="Banner/foto-desa.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-left">
      </div>
    </div>
    <div class="carousel-item">
      <img src="Banner/desa-wisata.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="Banner/inovasi.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<main id="main">
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Rekomendasi Desa Wisata</h2>
      </div>
      <div class="row">
        <?php foreach ($dw as $key => $dw) { ?>
          <div class="col-sm-4 mb-4">
            <div class="card mb-4">
              <img src="<?= base_url('Berita/' . $dw->gambar); ?>" class="img-fluid" alt="..." style="height: 220px; ">
              <div class="card-img-overlay" style="background-image: linear-gradient(transparent, #3c3838);">
                <h5 class="card-title alert badge bg-warning bg-opacity-75">Kategori</h5>
                <h6 class="card-title">.</h6>
                <h6 class="card-title">.</h6>
                <a class=" h4 card-text text-light"><?= $dw->judul_berita; ?></a>
                <p class="card-text text-info"><?= $dw->tag_berita; ?></p>
              </div>
            </div>
          </div>
        <?php }; ?>
      </div>
      <section>
</main><!-- End #main -->

<?= $this->include('Layout4/Footer') ?>