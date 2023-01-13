<?= $this->include('Layout4/Header') ?>
<!-- ======= Hero Section ======= -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
            aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
            aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner" style="height: 530px; ">
        <div class="carousel-item active">
            <img src="Banner/foto-desa.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-left">
                <a href="<?= base_url('/'); ?>" class="h1 bg-dark p-2 text-light bg-opacity-50"
                    style="font-family: Raleway, sans-serif;"><b>KOLOM DESA</b></a>
                <br>
                <br>
                <br>
                <a class="h6 alert bg-dark text-light bg-opacity-50">Kolom Desa sebagai wadah komunikasi bagi Desa di
                    seluruh Indonesia</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Banner/desa-wisata.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a href="<?= base_url('/Desa_Wisata'); ?>" class="h1 bg-dark p-2 text-warning bg-opacity-50"
                    style="font-family: Raleway, sans-serif;"><b>DESA WISATA</b></a>
                <br>
                <br>
                <br>
                <a class="h6 alert bg-dark text-light bg-opacity-50">Wadah informasi, serta arah pengembangan desa
                    wisata di Nusantara.</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Banner/download.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a href="<?= base_url('/Bum_Desa'); ?>" class="h1 bg-dark p-2 text-warning bg-opacity-50"
                    style="font-family: Raleway, sans-serif;"><b>BUM DESA</b></a>
                <br>
                <br>
                <br>
                <a class="h6 bg-dark text-light bg-opacity-25">Kegiatan pelayanan umum melalui penyediaan barang
                    dan/atau jasa serta pemenuhan kebutuhan umum masyarakat Desa, dan mengelola lumbung pangan Desa.</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Banner/budaya.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a href="<?= base_url('/Tradisi'); ?>" class="h1 bg-dark p-2 text-warning bg-opacity-50"
                    style="font-family: Raleway, sans-serif;"><b>BUDAYA</b></a>
                <br>
                <br>
                <br>
                <a class="h6 bg-dark text-light bg-opacity-25">Luas wilayah yang membentang dari Sabang sampai Marauke
                    menjadikannya memiliki keragaman budaya Indonesia yang luar biasa.</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- <br>
                <br> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="Banner/inovasi.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a href="<?= base_url('/Tradisi'); ?>" class="h1 bg-dark p-2 text-light bg-opacity-50"
                    style="font-family: Raleway, sans-serif;"><b>INOVASI DESA</b></a>
                <br>
                <br>
                <!-- <br> -->
                <a class="h6 bg-dark text-light bg-opacity-25">Salah satu peraih program Inovasi Desa 2019</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- <br> -->
            </div>
        </div>
        <div class="carousel-item">
            <img src="Banner/regulasi.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a href="<?= base_url('/Tradisi'); ?>" class="h1 bg-dark p-2 text-light bg-opacity-50"
                    style="font-family: Raleway, sans-serif;"><b>REGULASI DESA</b></a>
                <br>
                <br>
                <!-- <br> -->
                <a class="h6 bg-dark text-light bg-opacity-25">Bertujuan untuk menjadikan desa lebih berdaya dengan dana
                    desa serta partisipasi warga yang baik</a>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- <br> -->
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
                <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> -->
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php foreach ($dw as $key => $dw) { ?>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="<?= base_url('Berita/' . $dw->gambar); ?>" class="img-fluid" alt="..."
                                style="height: 270px;">
                            <div class="card-img-overlay"
                                style="background-image: linear-gradient(transparent, #3c3838);">
                                <h5 class="card-title mb-5  text-light">.</h5>
                                <h5 class="card-title mb-4 text-light">.</h5>
                                <p class="card-text mt-1 text-dark">.</p>
                                <!-- <p class="card-text mt-5 text-dark">.</p> -->
                                <a href="<?= base_url('berita/detail/' . $dw->sub_judul); ?>"
                                    class="h4 card-text text-light mt-2"><?= $dw->judul_berita; ?></a>
                                <br>
                                <small class="card-text text-info"><?= $dw->tag_berita; ?></small>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    <?php }; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="section-title">
                <a href="<?= base_url('/Desa_Wisata'); ?>" class="btn btn-warning teks-secondary">Jelajahi Desa Wisata
                    Lainnya</a>
                <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> -->
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Testimonials Section ======= -->

    <div class="container">
        <div class="section-title">
            <h2>Badan Usaha Milik Desa</h2>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> -->
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                <?php foreach ($bumdesa as $key => $dw) { ?>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="<?= base_url('berita/detail/' . $dw->sub_judul); ?>">
                            <img src="<?= base_url('Berita/' . $dw->gambar); ?>" class="card-img" alt="..."
                                style="height: 270px;">
                        </a>
                        <div class="card-img-overlay" style="background-image: linear-gradient(transparent, #3c3838);">
                            <!-- <h5 class="card-title mb-5 badge bg-warning bg-opacity-100 text-dark">Berkembang</h5> -->
                            <p class="card-text mt-5 text-dark">.</p>
                            <p class="card-text mt-5 text-dark">.</p>
                            <!-- <p class="card-text mt-5 text-dark">.</p> -->
                            <a href="<?= base_url('berita/detail/' . $dw->sub_judul); ?>"
                                class="h4 card-text text-light mt-2"><?= $dw->judul_berita; ?></a>
                            <br>
                            <small class="card-text text-secondary"><?= $dw->tag_berita; ?></small>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
                <?php }; ?>
            </div>
            <br>
            <br>
            <div class="swiper-pagination"></div>
        </div>
        <div class="section-title">
            <a href="<?= base_url('/Bum_Desa'); ?>" class="btn btn-warning teks-secondary">Jelajahi Bum Desa
                Lainnya</a>
            <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> -->
        </div>
    </div>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Berita Terkini</h2>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100" style="height: 260px;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php foreach ($nasional as $key => $dw) { ?>
                        <div class="card">
                            <img src="<?= base_url('Berita/' . $dw->gambar); ?>" class="img-fluid" alt="...">
                            <div class="card-img-overlay"
                                style="background-image: linear-gradient(transparent, #3c3838);">
                                <h5 class="card-title mb-5 alert badge bg-warning bg-opacity-75 text-dark">
                                    <?= $dw->id_kategori; ?></h5>
                                <p class="card-text mt-3 text-dark">.</p>
                                <!-- <p class="card-text mt-5 text-dark">.</p> -->
                                <!-- <p class="card-text mt-2 text-dark">.</p> -->
                                <!-- <p class="card-text mt-2 text-dark">.</p> -->
                                <!-- <p class="card-text mt-5 text-light">assass</p> -->
                                <a class="h6 card-text text-info mt-2"><?= $dw->created_at; ?></a>
                                <br>
                                <a href="<?= base_url('berita/detail/' . $dw->sub_judul); ?>"
                                    class="h6 card-text text-light mt-2"><?= $dw->judul_berita; ?></a>
                                <br>
                            </div>
                        </div>
                        <?php }; ?>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <?php foreach ($daerah as $key => $dw) { ?>
                        <div class="card" style="height: 500px; ">
                            <img src="<?= base_url('Berita/' . $dw->gambar); ?>" class="card-img"
                                style="height: 260px; ">
                            <div class=" card-img-overlay"
                                style="background-image: linear-gradient(transparent, #3c3838);">
                                <h5 class="card-title mb-5 alert badge bg-warning bg-opacity-75 text-dark">
                                    <?= $dw->id_kategori; ?></h5>
                                <p class="card-text mt-3 text-dark">.</p>
                                <!-- <p class="card-text mt-5 text-dark">.</p> -->
                                <!-- <p class="card-text mt-2 text-dark">.</p> -->
                                <!-- <p class="card-text mt-5 text-dark">.</p> -->
                                <a class="h6 card-text text-info mt-2"><?= $dw->created_at; ?></a>
                                <br>
                                <a href="<?= base_url('berita/detail/' . $dw->sub_judul); ?>"
                                    class="h6 card-text text-light mt-2"><?= $dw->judul_berita; ?></a>
                                <br>
                            </div>
                        </div>
                        <?php }; ?>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <?php foreach ($desa as $key => $dw) { ?>
                        <div class="card" style="height: 500px;">
                            <img src="<?= base_url('Berita/' . $dw->gambar); ?>" class="card-img" alt="..."
                                style="height: 260px;">
                            <div class=" card-img-overlay"
                                style="background-image: linear-gradient(transparent, #3c3838);">
                                <h5 class="card-title mb-5 alert badge bg-warning bg-opacity-75 text-dark">
                                    <?= $dw->id_kategori; ?></h5>
                                <p class="card-text mt-3 text-dark">.</p>
                                <!-- <p class="card-text mt-5 text-dark">.</p> -->
                                <!-- <p class="card-text mt-2 text-dark">.</p> -->
                                <!-- <p class="card-text mt-5 text-dark">.</p> -->
                                <a class="h6 card-text text-info mt-2"><?= $dw->created_at; ?></a>
                                <br>
                                <a href="<?= base_url('berita/detail/' . $dw->sub_judul); ?>"
                                    class="h6 card-text text-light mt-2"><?= $dw->judul_berita; ?></a>
                                <br>
                            </div>
                        </div>
                        <?php }; ?>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <br>
            <div class="section-title">
                <a href="<?= base_url('/Nasional'); ?>" class="btn btn-warning teks-secondary">Jelajahi Berita
                    Lainnya</a>
                <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> -->
            </div>
        </div>
    </section>




</main><!-- End #main -->

<?= $this->include('Layout4/Footer') ?>