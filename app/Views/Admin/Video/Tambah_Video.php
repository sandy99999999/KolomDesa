  <?= $this->extend('Admin/Tema_Admin'); ?>
  <?= $this->section('content'); ?>
  <div class="right_col" role="main">
      <div class="card">
          <div class="card-header">
              <h3>Tambah Video</h3>
          </div>
          <div class="card-body">
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

              <form method="post" action="<?= base_url('/Video/simpan') ?>">
                  <?= csrf_field(); ?>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Judul</label>
                      <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="judul_video">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Keterangan Video</label>
                      <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="ket_video">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Deskrpsi Video</label>
                      <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="deskripsi_video">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Masukkan Link Video</label>
                      <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="embed-responsive-item" class="form-control" id="contohupload1" placeholder="https://www.youtube.com/watch?v=8k0lvd7XqaY" name="list_video">
                      </div>
                  </div>

                  <div class="form-group">
                      <input type="submit" value="Simpan" class="btn btn-info" />
                  </div>
              </form>

          </div>
      </div>
      <?= $this->endSection() ?>