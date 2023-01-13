<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home - KOLOM DESA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?= $this->include('Layout3/Header') ?>
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url(Banner/foto-desa.jpeg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown badge bg-secondary p-2 text-width bg-opacity-75">KOLOM DESA</h2>
                                <p class="animate__animated animate__fadeInUp budge bg-secondary p-2 text-light alert bg-opacity-50">Kolom Desa sebagai wadah komunikasi bagi Desa di seluruh Indonesia</p>
                                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(Banner/desa-wisata.jpeg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown badge bg-success p-2 text-light bg-opacity-50">DESA WISATA</h2>
                                <p class="animate__animated animate__fadeInUp budge bg-success p-2 text-light bg-opacity-75">Wadah informasi, serta arah pengembangan desa wisata di Nusantara.</p>
                                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(Banner/download.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown badge bg-dark p-2 text-info bg-opacity-50">BUM DESA</h2>
                                <p class="animate__animated animate__fadeInUp budge bg-dark p-2 text-width bg-opacity-50">Kegiatan pelayanan umum melalui penyediaan barang dan/atau jasa serta pemenuhan kebutuhan umum masyarakat Desa, dan mengelola lumbung pangan Desa.</p>
                                <!-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section><!-- End Hero Section -->


    <main id="main">

        <!-- ======= Recent Photos Section ======= -->
        <section id="recent-photos" class="recent-photos">
            <div class="container">
                <div class="section-title">
                    <h2>Rekomendasi Wisata</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>
                <div class="recent-photos-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php foreach ($dw as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-4">Desa Wisata</h4>
                                    <p class="card-text "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Recent Photos Section -->

        <!-- ======= Recent Photos Section ======= -->
        <section id="recent-photos" class="recent-photos">
            <div class="container">
                <div class="section-title">
                    <h2>Badan Usaha Milik Desa</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>
                <div class="recent-photos-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php foreach ($bumdesa as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-4">BUMDESA</h4>
                                    <!-- <a href="#" class="h4 btn btn-primary ">Desa Wisata</a> -->
                                    <p class="card-text mt-4 "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Recent Photos Section -->

        <!-- ======= Recent Photos Section ======= -->
        <section id="recent-photos" class="recent-photos">
            <div class="container">
                <div class="section-title">
                    <h2>BERITA</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>
                <div class="recent-photos-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php foreach ($nasional as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-2">NASIONAL</h4>
                                    <!-- <a href="#" class="h4 btn btn-primary ">Desa Wisata</a> -->
                                    <p class="card-text mt-4 "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                        <?php foreach ($daerah as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-2">DAERAH</h4>
                                    <!-- <a href="#" class="h4 btn btn-primary ">Desa Wisata</a> -->
                                    <p class="card-text mt-4 "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                        <?php foreach ($desa as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-2">DESA</h4>
                                    <!-- <a href="#" class="h4 btn btn-primary ">Desa Wisata</a> -->
                                    <p class="card-text mt-4 "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                        <?php foreach ($nasional1 as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-2">NASIONAL</h4>
                                    <!-- <a href="#" class="h4 btn btn-primary ">Desa Wisata</a> -->
                                    <p class="card-text mt-4 "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                        <?php foreach ($daerah1 as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-2">DAERAH</h4>
                                    <!-- <a href="#" class="h4 btn btn-primary ">Desa Wisata</a> -->
                                    <p class="card-text mt-4 "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                        <?php foreach ($desa1 as $key => $dw) { ?>
                            <div class="swiper-slide card img-fluid">
                                <img class="rounded img-fluid" src="<?= base_url('Berita/' . $dw->gambar); ?>" alt="Card image" style=" height: 250px;">
                                <div class="card-img-overlay">
                                    <h4 class="card-title badge bg-warning text-dark mb-2">DESA</h4>
                                    <!-- <a href="#" class="h4 btn btn-primary ">Desa Wisata</a> -->
                                    <p class="card-text mt-4 "><a class="h5 text-light" href="<?= base_url('berita/detail/' . $dw->id_berita); ?>"><?= $dw->judul_berita; ?></a></p>
                                    <!-- <a href="#"><?= $dw->created_at; ?></a> -->
                                </div>
                            </div>
                        <?php }; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Recent Photos Section -->

    </main><!-- End #main -->

    <?= $this->include('Layout3/Footer') ?>