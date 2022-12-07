<?= $this->include('Layout2/Header2') ?>

<!-- Top News Slider Start -->
<div class="container-fluid ml-1ß py-3">
    <div class="container">
        <a href="<?= base_url('/') ?>" class="text-dark stext-109 cl8 hov-cl1 trans-04 fa fa-home">
            Beranda
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
        <a href="blog.html" class="text-dark stext-109 cl8 hov-cl1 trans-04">
            Foto
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="container-fluid ml-1ß py-3">
    <div class="container">
        <div class="row px-xl-3">

            <div class="col-lg-7">
                <a class="btn btn-success mb-2 text-whith" href="<?= base_url('/Foto'); ?>">Foto</a>
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <div class="rotate-img" style="height: 190px;">
                        <h4 class="mt-3 font-weight-600">
                            <?= $video->judul_video ?>
                        </h4>
                        <p class="fs-13 text-muted mb-0">
                            <small class="far fa-clock"> </small> <?= $video->created_at ?>
                        </p>
                        <iframe width="700" height="400" src="<?= $video->list_video; ?>"> </iframe>
                        <p class="fs-13 text-muted mt-2">
                            <small> </small> <?= $video->ket_video ?>
                        </p>
                        <p class="fs-13 text-muted mt-2">
                            <small> </small> <?= $video->deskripsi_video ?>
                        </p>

                        <!-- <div class="mb-3 mt-2"><a>Penulis : </a> <= $list_berita->nama_penulis ?></div>
                            <div class="mb-3"><a>Editor : </a><= $list_berita->nama_editor ?></div> -->
                        <!-- <h6 class="mb-5">Tag Berita : </h6> -->

                    </div>
                </div>
            </div>

            <div class="col-lg-1 ">
            </div>

            <div class="col-lg-4 ">

                <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp mb-3">Trending</a>
                <div class="row">
                    <?php foreach ($pilihan as $row => $brt) : ?>

                        <div class="col-sm-8 mb-4 text-dark">
                            <h6>
                                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">

                                    <?= $brt->judul_berita ?>
                                </a>
                                <div>
                                    <small class="far fa-clock "> <?= $brt->created_at ?></small>
                                </div>
                            </h6>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <div class="rotate-img">
                                <img src="<?= base_url('Berita/' . $brt->gambar) ?>" alt="banner" class="img-fluid" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid mb-500">
        <div class="row px-xl-5">

            <div class="col-lg-8">


            </div>


            <div class="col-lg-4 ">
                <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Terpopuler</a>
                <div class="row">
                    <?php foreach ($berita_utama as $row => $brt) : ?>

                        <div class="col-sm-8 mb-4 text-dark">
                            <h6>
                                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                                    <?= $brt->judul_berita ?>
                                </a>
                                <div>
                                    <small class="far fa-clock "> <?= $brt->created_at ?></small>
                                </div>
                            </h6>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <div class="rotate-img">
                                <img src="<?= base_url('Berita/' . $brt->gambar) ?>" alt="banner" class="img-fluid" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid mb-500">
    <div class="row px-xl-5 mb-500">

        <div class="container-fluid mb-3">
            <div class="row px-xl-3">

                <div class="col-lg-7">
                    <div class="mt-4">
                        <h4 class="mb-2 mt-4">Komentar</h4>
                        <!-- <form method="post" action="<= base_url('Komentar_Berita/' . $list_berita->id_berita) ?>"> -->
                        <?= csrf_field(); ?>


                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Nama</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="nama_komentar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Email</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="email_komentar">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Tulis</label>
                            <div class="col-md-9 col-sm-9 ">
                                <textarea type="text" class="form-control" name="isi_komentar" style='height:260px'> </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 "></label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="submit" value="Kirim Komentar" class="btn btn-success" />
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- partial -->

<?= $this->include('Layout2/Footer2') ?>