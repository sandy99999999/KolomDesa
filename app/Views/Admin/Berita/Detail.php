<?= $this->include('Layout2/Header2') ?>

<!-- Top News Slider Start -->
<div class="container-fluid ml-1ß py-3">
  <div class="container">
    <a href="<?= base_url('/') ?>" class="text-dark stext-109 cl8 hov-cl1 trans-04 fa fa-home">
      Beranda
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>
    <a href="blog.html" class="text-dark stext-109 cl8 hov-cl1 trans-04">
      Berita
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>
    <small href="blog.html" class="text-dark stext-109 cl8 hov-cl1 trans-04">
      <?= $list_berita->judul_berita ?>
    </small>
  </div>
</div>


<!-- content -->
<section class="bg0 p-t-52 p-b-20">
  <div class="container-fluid">
    <div class="container">
      <div class="row px-xl-2">
        <div class="col-lg-8">
          <a class="btn btn-success mb-2 text-white "><?= $list_berita->id_kategori ?></a>
          <div id="header-carousel" class="carousel slide carousel-fade mb-30 text-dark mb-lg-0" data-ride="carousel">
            <h4 class="mt-2 mb-4 font-weight-600">
              <?= $list_berita->judul_berita ?>
            </h4>
            <h6 class="col-14 px-xl-1 mb-2">
              <?php foreach ($user as $row) { ?>
                <a class="far fa-user-circle text-dark"> </a> <?= $row->nama ?>
              <?php } ?>
              <a class="mr-2"> </a>
              <small class="text-dark ">. <?= $list_berita->created_at ?></small>
              <a class="mr-4"></a>
              <a class="mr-4"></a>
              <a class="mr-4"></a>
              <a class="mr-4"></a>
              <a class="mr-4"></a>
              <a class="mr-4"></a>
              <a class="mr-4"></a>
              <a class="mr-4"></a>
              <!-- <a class="mr-4"></a> -->
              <small class="far fa-comment mr-1 text-dark"> <?= count($komentar) ?> </small>
              <small class="far fa-eye text-dark mr-1"> <?= $list_berita->dilihat ?> </small>
              <small class="far fa-bookmark text-dark"> 10 Menit Yang Lalu </small>
            </h6>
            <img src="<?= base_url('Berita/' . $list_berita->gambar); ?>" class="img-fluid mb-1" style="width: 700px; height: 320px;" />
            <p class="fs-13 text-muted text-dark">
              <small> <?= $list_berita->ket_gambar ?></small>
            </p>
          </div>
          <div class="row px-xl-1">
            <?php foreach ($iklan_detail as $row => $brt) { ?>
              <div class="col-lg-2">
                <p class="text-center text-dark mb-1"> Iklan </p>
                <img src="<?= base_url('Iklan/' . $brt->gambar_iklan); ?>" class="img-fluid mb-1" style="height: 500px;" />
              </div>
            <?php } ?>
            <div class="col-lg-10 text-dark">
              <p class="text-dark "><?= $list_berita->isi_berita ?> </p>
              <!-- <iframe width="600" height="400" src="<= $list_berita->video_youtube; ?>" class="d-flex"> </iframe> -->
              <div class="mb-3 mt-2"><a>Penulis : </a> <?= $list_berita->nama_penulis ?></div>
              <div class="mb-3"><a>Editor : </a><?= $list_berita->nama_editor ?></div>
              <!-- <h6 class="mb-5">Tag Berita : </h6> -->
            </div>
          </div>
          <br />

          <div class="row mt-4">
            <div class="col-lg-10">
              <div class="bg-whith mb-4" style="padding: 30px;">
                <h4 class="mb-4">Review (<?= count($komentar) ?> Comments)</h4>
                <?php foreach ($komentar as $row => $k) { ?>
                  <div class="media mb-4">
                    <img src="<?= base_url('Berita') ?>/user.png" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                    <div class="media-body">
                      <h6><a href=""><?= $k->nama_pengirim ?></a> <small><i><?= $k->created_at ?></i></small></h6>
                      <p><?= $k->isi_komentar ?></p>
                      <!-- <button class="btn btn-sm btn-outline-secondary">Reply</button> -->
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <!-- Comment List End -->

          <div class="row px-xl-1 mt-4">
            <div class="col-lg-10">
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
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Nama</label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" name="nama_pengirim">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Email</label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" name="email_pengirim">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Tulis</label>
                  <div class="col-md-9 col-sm-9 ">
                    <textarea type="text" class="form-control" name="isi_komentar" style='height:260px'></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 "></label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="submit" value="Kirim Komentar" class="btn btn-info" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- sidebar kanan -->
        <?= $this->include('Layout/Sidebar') ?>

      </div>
      <!-- </div> -->
</section>

<?= $this->include('Layout2/Footer2') ?>