<title><?= $list_berita->sub_judul; ?></title>
<meta name='robots' content='max-image-preview:large' />
<!-- <link rel="alternate" type="application/rss+xml" title="Kolom Desa &raquo; Feed" href="https://kolomdesa.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Kolom Desa &raquo; Umpan Komentar"
    href="https://kolomdesa.com/comments/feed/" /> -->
<!-- <link rel="alternate" type="application/rss+xml" title="Kolom Desa &raquo; Nanggawean Umpan Komentar"
    href="https://kolomdesa./2023/01/09/nanggawean/feed/" /> -->

<meta property="og:title" content="<?= $list_berita->sub_judul; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?= $list_berita->judul_berita; ?>" />
<meta property="og:url" content="<?= $list_berita->sub_judul; ?>" />
<meta property="og:site_name" content="Kolom Desa" />
<meta property="og:image" content="<?= base_url('Berita/' . $list_berita->gambar); ?>" />
<?= $this->include('Layout4/Header') ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <!-- <a href="<?= base_url('/'); ?>">Home</a> -->
                <ol>
                    <li><a href="">Berita</a></li>
                    <li>Detail</li>
                    <li><?= $list_berita->sub_judul; ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12" style="height: 600px;">
                    <div class="portfolio-details-slider swiper">
                        <div class="align-items-center">

                            <div class="swiper-slide">
                                <img src="<?= base_url('Berita/' . $list_berita->gambar); ?>" alt="">
                            </div>
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>
                <div class="portfolio-info col-lg-8">
                    <!-- <h3><?= $list_berita->judul_berita; ?></h3> -->
                    <h4><?= $list_berita->judul_berita; ?></h4>
                    <h6 class="mb-4"><?= $list_berita->created_at; ?></h6>
                    <ul>
                        <li><?= $list_berita->isi_berita; ?></li>
                        <li><strong>Penulis :</strong> <?= $list_berita->nama_penulis; ?></li>
                        <li><strong>Editor :</strong> <?= $list_berita->nama_editor; ?></li>
                        <div class="row mt-4">
                            <h2 class="tombol_share">
                                <label class="uhuy2">Bagikan: </label>
                                <a href="http://www.facebook.com/share/url=<?= base_url('berita/detail/' . $list_berita->sub_judul); ?>"
                                    class="text-primary bx bxl-facebook"></a>
                                <a href="https://twitter.com/share?url=<?= base_url('berita/detail/' . $list_berita->sub_judul); ?>"
                                    class="fab bx bxl-twitter"></a>
                                <a href="https://telegram.me/share/url=<?= base_url('berita/detail/' . $list_berita->sub_judul); ?>"
                                    class="text-info bx bxl-telegram"></a>
                                <a href="https://api.whatsapp.com/send?text=<?= base_url('berita/detail/' . $list_berita->sub_judul); ?>"
                                    class="text-success bx bxl-whatsapp"></a>
                            </h2>
                        </div>
                        <br />
                        <br />
                        <h4 class="row mt-4">Review (<?= count($komentar) ?> Comments)</h4>
                        <?php foreach ($komentar as $row => $k) { ?>
                        <div class="media mb-4">
                            <img src="<?= base_url('Berita') ?>/user.png" alt="Image" class="img-fluid mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6><a href=""><?= $k->nama_pengirim ?></a> <small><i><?= $k->created_at ?></i></small>
                                </h6>
                                <p><?= $k->isi_komentar ?></p>
                                <!-- <button class="btn btn-sm btn-outline-secondary">Reply</button> -->
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row  mt-4">
                            <!-- <div class="col-lg-10"> -->
                            <h3>Komentar</h3>
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h4>Periksa Entrian Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <form method="post" action="<?= base_url('komentar/' . $list_berita->id_berita) ?>">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id_berita" value="<?= $list_berita->id_berita; ?>">
                                <div class="form-group ">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Nama</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="nama_pengirim">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Email</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="email_pengirim">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-form-label col-md-3 col-sm-3 ">Tulis</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <textarea type="text" class="form-control" name="isi_komentar"
                                            style='height:260px'></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 "></label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="submit" value="Kirim Komentar" class="btn btn-info" />
                                    </div>
                                </div>
                            </form>
                            <!-- </div> -->
                        </div>
                        <!-- <li><strong>Client</strong>: ASU Company</li>
                        <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                    </ul>
                </div>

                <!-- <div class="row gy-4 px-5"> -->

                <div class="col-lg-4 mt-5">
                    <!-- <div class="portfolio-info"> -->
                    <a class="h3 alert badge bg-dark bg-opacity-50">Berita Lainnya</a>
                    <br>
                    <br>
                    <!-- <br> -->
                    <!-- </div> -->
                    <!-- <a class="h4 mb-4 text-dark" href="#"><u>Trending</u></a>
                    <br>
                    <br> -->

                    <div class="row ">
                        <?php foreach ($nasional as $row => $brt) { ?>
                        <div class="col-sm-8 mb-4">
                            <h6 class="font-weight-600 mb-1">
                                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->sub_judul); ?>">
                                    <?= $brt->judul_berita; ?>
                                </a>
                            </h6>
                            <p class="fs-13 text-muted mb-0">
                                <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                            </p>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="rotate-img">
                                <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid">
                            </div>
                        </div>
                        <?php } ?>
                        <?php foreach ($daerah as $row => $brt) { ?>
                        <div class="col-sm-8 mb-4">
                            <h6 class="font-weight-600 mb-1">
                                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->sub_judul); ?>">
                                    <?= $brt->judul_berita; ?>
                                </a>
                            </h6>
                            <p class="fs-13 text-muted mb-0">
                                <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                            </p>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="rotate-img">
                                <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid">
                            </div>
                        </div>
                        <?php } ?>
                        <?php foreach ($desa as $row => $brt) { ?>
                        <div class="col-sm-8 mb-4">
                            <h6 class="font-weight-600 mb-1">
                                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->sub_judul); ?>">
                                    <?= $brt->judul_berita; ?>
                                </a>
                            </h6>
                            <p class="fs-13 text-muted mb-0">
                                <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                            </p>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="rotate-img">
                                <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->

<?= $this->include('Layout4/Footer') ?>