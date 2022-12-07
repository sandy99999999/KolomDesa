<div class="col-lg-4 ">
    <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp mb-3">Trending</a>
    <div class="row">
        <?php foreach ($pilihan as $row => $brt) : ?>

            <div class="col-sm-8 mb-4 text-dark">
                <!-- <h6> -->
                <a class=" h6 text-dark" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                    <?= $brt->judul_berita ?>
                </a>
                <div class="mt-2">
                    <small> <?= $brt->created_at ?></small>
                </div>
                <!-- </h6> -->
            </div>
            <div class="col-sm-4 mb-3">
                <div class="rotate-img">
                    <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="btn btn-outline-success mb-2 text-dark animate__animated animate__fadeInUp">Terpopuler</a>
    <div class="row">
        <?php foreach ($berita_utama as $row => $brt) : ?>

            <div class="col-sm-8 mb-4 text-dark">
                <!-- <h6> -->
                <a class="h6 text-dark mb-2" href="<?= base_url('berita/detail/' . $brt->id_berita); ?>">
                    <?= $brt->judul_berita ?>
                </a>
                <div class="mt-2">
                    <small class="mt-3"> <?= $brt->created_at ?></small>
                </div>
                <!-- </h6> -->
            </div>
            <div class="col-sm-4 mb-3">
                <div class="rotate-img">
                    <img src="<?= base_url('Berita/' . $brt->gambar); ?>" alt="banner" class="img-fluid" />
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>