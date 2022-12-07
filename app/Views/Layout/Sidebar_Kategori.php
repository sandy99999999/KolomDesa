<div class="col-lg-4 mb-4">
    <a class="btn btn-outline-success mb-4 text-dark  " href="#">Trending</a>
    <div class="row ">
        <?php foreach ($pilihan as $row => $brt) { ?>
            <div class="col-sm-8 mb-4">
                <h6 class="font-weight-600 mb-1">
                    <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                        <?= $brt->judul_berita; ?>
                    </a>
                </h6>
                <p class="fs-13 text-muted mb-0">
                    <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
                </p>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="rotate-img">
                </div>
                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                    <img src="<?= 'Berita/' . $brt->gambar; ?>" alt="banner" class="img-fluid" />
                </a>
            </div>
    </div>
<?php } ?>
</div>

<div class="row ">
    <?php foreach ($iklan as $row => $brt) { ?>

        <div class="col-sm-8 mb-4">

            <div class="col-sm-4 mb-4">
                <div class="rotate-img">
                    <img src="<?= 'Iklan/' . $brt->gambar_iklan; ?>" alt="banner" class="img-fluid" style="height: 350px ;" />

                </div>
            </div>
        <?php } ?>
        </div>
</div>


<a class="btn btn-outline-success mb-4 text-dark  " href="#">Terpopuler</a>
<div class="row ">
    <?php foreach ($berita_utama as $row => $brt) { ?>

        <div class="col-sm-8 mb-4">
            <h6 class="font-weight-600 mb-1">
                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                    <?= $brt->judul_berita; ?>
                </a>
            </h6>
            <p class="fs-13 text-muted mb-0">
                <small class="mr-2 far fa-clock"></small><?= $brt->created_at; ?>
            </p>
        </div>
        <div class="col-sm-4 mb-4">
            <div class="rotate-img">
                <a class="text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                    <img src="<?= 'Berita/' . $brt->gambar; ?>" alt="banner" class="img-fluid" />
                </a>
            </div>
        </div>
    <?php } ?>
</div>
</div>