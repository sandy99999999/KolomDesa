<?= $this->include('Layout2/Header2') ?>

<!-- Top News Slider Start -->
<div class="container-fluid bg-light ml-0 mt-2">
    <div class="container">
        <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
            <?php foreach ($headline as $row => $brt) { ?>
                <div class="d-flex">
                    <a class=" mr-2" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                        <!-- <div> <span class="d-inline p-2 vr bg-success text-light text-center mb-2 mt-0 pr-3 pl-2" class="rounded-pill"> Headline</span>
                        </div> -->

                        <img class="mt-1" src="<?= base_url('Berita/' . $brt->gambar); ?>" style="width: 85px; height: 80px; object-fit: cover;">
                    </a>
                    <!-- <div class="d-flex align-items-center bg-light px-1" style="height: 80px;"> -->
                    <div class="vstack gap-3">
                        <!-- <div class="mb-1"><small></small></div> -->

                        <small> <a class="text-dark mt-0 text-top" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>"><?= $brt->judul_berita; ?></a></small>
                    </div>
                    <!-- </div> -->
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Top News Slider End -->

<!-- News With Sidebar Start -->
<div class=" container-fluid bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row mb-3">
                    <div class="col-lg-12 mb-4 mt-2">
                        <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                            <?php foreach ($headline1 as $row => $brt) { ?>
                                <div class="position-relative overflow-hidden" style="height: 435px;">
                                    <a class="" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                        <img class="img-fluid h-100" src="<?= base_url('Berita/' . $brt->gambar) ?>" style="object-fit: cover;">
                                    </a>
                                    <div class="overlay">
                                        <div class="mb-1">
                                            <a class="text-white bg-success align-text-top py-0 pr-1 pl-1" href=""> Headline</a>
                                            <span class="px-2 text-white">/</span>
                                            <small class="text-white" href="<?= base_url('berita/detail/' . $brt->id_berita) ?>"><?= $brt->created_at ?></small>
                                        </div>
                                        <a class="h3 m-0 text-white font-weight-bold" href="<?= base_url('berita/detail/' . $brt->id_berita) ?>"><?= $brt->judul_berita ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="" style="font-size: 15px;">
                            <h3 class="fas fa-bookmark mb-1 text-danger"><a class="text-dark"> Terpopuler</a></h3>
                            <hr class="border border-primary border-1 ">
                        </div>
                        <div class="owl-carousel owl-carousel-2 carousel-item-2 position-relative">
                            <?php foreach ($populer as $row => $brt) { ?>
                                <div class="position-relative overflow-hidden" style="height: 250px;">
                                    <a class="" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                        <img class="img-fluid w-100 h-100" src="<?= base_url('Berita/' . $brt->gambar); ?>/" style="object-fit: cover;">
                                    </a>
                                    <div class="overlay">
                                        <div class="mb-1" style="font-size: 13px;">
                                            <a class="text-white" href=""><?= $brt->created_at; ?></a>
                                        </div>
                                        <small>
                                            <a class="h6 m-0 text-white" href="<?= base_url('berita/detail/' . $brt->id_berita) ?>"><?= $brt->judul_berita; ?></a>
                                        </small>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="" style="font-size: 15px;">
                            <h3 class="fas fa-bookmark mb-1 text-danger"><a class="text-dark"> Berita Terkini</a></h3>
                            <hr class="border border-primary border-1 ">
                        </div>
                        <?php foreach ($utama as $row => $brt) { ?>
                            <div class="d-flex mb-3">
                                <a class="" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                    <img src="<?= base_url('Berita/' . $brt->gambar); ?>" style="width: 150px; height: 100px; object-fit: cover;">
                                </a>
                                <div class="w-100 bg-light px-3" style="height: 100px;">
                                    <h2 class="d-flex flex-column justify-content-top text-dark mb-3">
                                        <a class="h6 " href="<?= base_url('berita/detail/' . $brt->id_berita); ?>"><?= $brt->judul_berita ?></a>
                                    </h2>
                                    <div class="" style="font-size: 15px;">
                                        <a class="align-bottom text-alert-success" href=""><?= $brt->id_kategori; ?></a>
                                        <span class="px-1">/</span>
                                        <span><?= $brt->created_at; ?></span>
                                        <hr class="border border-primary border-1 opacity-50">
                                    </div>


                                </div>

                            </div>

                        <?php } ?>
                    </div>
                    <div class="col-lg-12 py-3">
                        <!-- <div class="bg-light py-2 px-4 mb-3"> -->
                        <h3 class="fas fa-bookmark mb-3 text-danger"><a class="text-dark"> Galeri Foto</a></h3>
                        <!-- </div> -->
                        <div class="owl-carousel owl-carousel-3 carousel-item-3 position-relative">
                            <?php foreach ($foto as $row => $brt) { ?>
                                <div class="position-relative">
                                    <a class="mb-3" href="<?= base_url('Foto/detail/' . $brt->id_foto); ?>">
                                        <img src="<?= base_url('Berita/' . $brt->list_foto); ?>" style="width: 220px; height: 130px; object-fit: cover;">
                                    </a>
                                    <div class="mb-2 mt-2" style="font-size: 13px;">
                                        <span><?= $brt->created_at; ?></span>
                                    </div>
                                    <a class="h6 m-0" href="<?= base_url('Foto/detail/' . $brt->id_foto); ?>"><?= $brt->judul_foto; ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-12 py-3">
                        <!-- <div class="bg-light py-2 px-4 mb-3"> -->
                        <h3 class="fas fa-bookmark mb-3 text-danger"><a class="text-dark"> Video Terkini</a></h3>
                        <!-- </div> -->
                        <div class="owl-carousel owl-carousel-3 carousel-item-3 position-relative">
                            <?php foreach ($video as $row => $brt) { ?>
                                <div class="position-relative">
                                    <a class="mb-3" href="<?= base_url('Video/detail/' . $brt->id_video); ?>">
                                        <iframe src="<?= $brt->list_video; ?>" style="width: 220px; height: 130px; object-fit: cover;"></iframe>

                                        <div class="mb-2 mt-2" style="font-size: 13px;">
                                            <span><?= $brt->created_at; ?></span>
                                        </div>
                                        <a class="h6 m-0" href="<?= base_url('Video/detail/' . $brt->id_video); ?>"><?= $brt->judul_video; ?></a>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="mb-3 pb-3">
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="offcanvas"></button> Iklan
                    <a href=""><img class="img-fluid w-100" id="offcanvas" src="<?= base_url('13') ?>/img/ads-700x70.jpg" alt=""></a>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="fas fa-bookmark mb-3 text-danger"><a class="text-dark"> Desa Wisata</a></h3>
                        <?php foreach ($wisata as $key => $brt) { ?>
                            <div class="d-flex mb-3">
                                <a class="" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                    <img src="<?= base_url('Berita/' . $brt->gambar); ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                </a>
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <!-- <a href="">Technology</a> -->
                                        <!-- <span class="px-1">/</span> -->
                                        <span><?= $brt->created_at ?></span>
                                    </div>
                                    <a class="h6 m-0" href="<?= base_url('berita/detail/' . $brt->id_berita) ?>"><?= $brt->judul_berita; ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="fas fa-bookmark mb-3 text-danger"><a class="text-dark"> Desa Wisata</a></h3>
                        <?php foreach ($wisata1 as $key => $brt) { ?>
                            <div class="d-flex mb-3">
                                <a class="" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                    <img src="<?= base_url('Berita/' . $brt->gambar); ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                </a>
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <!-- <a href="">Technology</a> -->
                                        <!-- <span class="px-1">/</span> -->
                                        <span><?= $brt->created_at ?></span>
                                    </div>
                                    <a class="h6 m-0" href="<?= base_url('berita/detail/' . $brt->id_berita) ?>"><?= $brt->judul_berita; ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 pt-3 pt-lg-0 mt-2 mb-4">
                <!-- Social Follow Start -->
                <button type="button" class="btn-close" aria-label="Close"></button> Iklan
                <div class="pb-3">
                    <div class="bg-light py-0 px-2 mb-0">
                        <img class="img-fluid" src="<?= base_url('/Iklan/Home.jpg') ?>" style="width: 250px; height: 245px; object-fit: cover;">
                        </a>
                    </div>
                    <div class="bg-light py-2 px-0 mb-0">
                        <a class="m-0">Follow Us</a>
                    </div>
                    <div class="d-flex mb-2">

                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #52AAF4;">
                            <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                        </a>
                    </div>
                    <div class="d-flex mb-2">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                            <small class="fab fa-youtube mr-2"></small><small>12,345 Subscriber</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                            <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->
                <!-- Popular News Start -->
                <div class="pb-3">
                    <table class="table table-striped-columns table-hover table-warning">
                        <h3 class="">Tranding</h3>
                        <hr class="border border-primary border-1">
                        <?php $no = 1;
                        foreach ($trending as $row) { ?>
                            <!-- <div class="d-flex mb-3"> -->
                            <tr>
                                <td class="table-primary align-middle">
                                    <a class="h3  text-success"><?= $no++; ?></a>
                                </td>
                                <td class="table-secondary">
                                    <a class="text-dark" href="<?= base_url('berita/detail/' . $row->id_berita); ?>"><?= $row->judul_berita; ?></a>
                                    <br>
                                    <br>
                                    <small class="mt-2 text-light"><?= $brt->created_at; ?></small>
                                </td>
                            </tr>
                            <!-- </div> -->
                        <?php } ?>
                    </table>
                </div>
                <!-- Popular News End -->
                <!-- Newsletter Start -->
                <div class="">
                    <h3 class="">Berita Pilihan
                        <hr class="border border-primary border-1">
                    </h3>
                    <?php foreach ($utama as $key => $brt) { ?>
                        <div class="d-flex mb-3">
                            <a class="" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                <img src="<?= base_url('Berita/' . $brt->gambar); ?>" style="width: 75px; height: 75px; object-fit: cover;">
                            </a>
                            <div class="flex-column bg-light px-1">
                                <div class="mb-1" style="font-size: 10px;">
                                    <span><?= $brt->created_at ?></span>
                                </div>
                                <span><a class="h6" style="font-size: 11px;" href=" <?= base_url('berita/detail/' . $brt->id_berita); ?>"><?= $brt->judul_berita; ?></a></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- Newsletter End -->

                <!-- Ads Start -->
                <div class="mb-1 pb-1">
                    <button type="button" class="btn-close" aria-label="Close"></button> Iklan
                    <a href=""><img class="img-fluid" src="<?= base_url('Iklan') ?>/panjang.gif" alt=""></a>
                </div>
                <!-- Ads End -->

                <!-- Tags Start -->
                <!-- <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Tags</h3>
                    </div>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                    </div>
                </div> -->
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
</div>


<!-- ======= Testimonials Section ======= -->
<section class="testimonials bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Tokoh Desa</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>
                <div class="testimonials-slider swiper mt-2 cpl-lg-12" data-aos="fade-in" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <?php foreach ($Tokoh as $row => $brt) { ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p class="alert-dark">
                                        <i class="bx bxs-quote-alt-left quote-icon-left "></i>
                                        " <?= $brt->sub_judul ?>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="<?= base_url('Berita/' . $brt->gambar); ?>" class="testimonial-img" alt="..." style="width: 80px; height: 80px; object-fit: cover;">
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




<!-- News With Sidebar End -->
<?= $this->include('Layout2/Footer2') ?>