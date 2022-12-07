<?= $this->include('Layout2/Header2') ?>

<style>
    .button {
        background: #020;
    }
</style>

<div class="container-fluid ml-1ß py-3 mt-3">
    <div class="container">
        <div class="row px-xl-4 rounded-3 ">
            <div class="d-flex ">
                <div class="nav flex-column nav-pills me-2 " aria-orientation="vertical">
                    <button class="btn text-dark btn-info nav-link text-left" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tentangkami" type="button" role="tab" aria-controls="v-pills-tentangkami" aria-selected="true">Tentang Kami</button>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-redaksi" role="tab" aria-controls="v-pills-redaksi" aria-selected="false">Redaksi</button>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-infoiklan" type="button" role="tab" aria-controls="v-pills-infoiklan" aria-selected="false">Info Iklan</button>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mediacyber" type="button" role="tab" aria-controls="v-pills-mediacyber" aria-selected="false">Pedoman Media Cyber</button>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disclainer" type="button" role="tab" aria-controls="v-pills-disclainer" aria-selected="false">Disclaimer</button>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-kebijakan" type="button" role="tab" aria-controls="v-pills-kebijakan" aria-selected="false">Kebijakan Privasi</button>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pedomanpengguna" type="button" role="tab" aria-controls="v-pills-pedomanpengguna" aria-selected="false">Pedoman Penggunaan</button>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-panduanpengirim" type="button" role="tab" aria-controls="v-pills-panduanpengirim" aria-selected="false">Panduan Pengiriman Tulisan</button>
                    <a href="<?= base_url() ?>/register" class=" nav-link text-dark btn-info text-left">Daftar Menjadi Kontributir</a>
                    <button class="nav-link text-dark btn-info text-left" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-copyright" type="button" role="tab" aria-controls="v-pills-copyright" aria-selected="false">Copyright</button>
                </div>
                <div class="row col-9">
                    <div class="tab-content mb-4" id="v-pills-tabContent"> <img class="mb-4" src="<?= base_url('Logo') ?>/kolomdes.png" style="width: 200px;" alt="">
                        <?php foreach ($web as $key => $bb) { ?>
                            <div class="tab-pane fade show active" id="v-pills-tentangkami" role="tabpanel" aria-labelledby="v-pills-tentangkami-tab"><?= $bb->tentang_kami; ?></div>
                            <div class="tab-pane fade" id="v-pills-redaksi" role="tabpanel" aria-labelledby="v-pills-resaksi-tab"><?= $bb->redaksi; ?></div>
                            <div class="tab-pane fade" id="v-pills-infoiklan" role="tabpanel" aria-labelledby="v-pills-infoiklans-tab"><?= $bb->info_iklan; ?></div>
                            <div class="tab-pane fade" id="v-pills-mediacyber" role="tabpanel" aria-labelledby="v-pills-mediacyber-tab"><?= $bb->pedoman_cyber; ?></div>
                            <div class="tab-pane fade" id="v-pills-disclainer" role="tabpanel" aria-labelledby="v-pills-discaliner-tab"><?= $bb->disclaimer; ?></div>
                            <div class="tab-pane fade" id="v-pills-kebijakan" role="tabpanel" aria-labelledby="v-pills-kebijakan-tab"><?= $bb->kebijakan_privasi; ?></div>
                            <div class="tab-pane fade" id="v-pills-pedomanpengguna" role="tabpanel" aria-labelledby="v-pills-pedoamanpengguna-tab"><?= $bb->pedoman_penggunaan; ?></div>
                            <div class="tab-pane fade" id="v-pills-panduanpengirim" role="tabpanel" aria-labelledby="v-pills-panduanpengirim-tab">
                                <h1 class="text-bold">Pedoman Pengiriman Tulisan</h1>
                                <img class="img-fluid" src="<?= base_url('Panduan.png') ?>">
                                <?= $bb->panduan_pengiriman; ?>
                            </div>
                            <!-- <div class="tab-pane fade" id="v-pills-daftar" role="tabpanel" aria-labelledby="v-pills-daftar-tab"><= $bb->kontributor; ?></div> -->
                            <div class="tab-pane fade" id="v-pills-copyright" role="tabpanel" aria-labelledby="v-pills-copyright-tab"><?= $bb->copyright; ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->include('Layout2/Footer2') ?>