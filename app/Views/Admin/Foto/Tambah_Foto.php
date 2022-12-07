  <?= $this->extend('Admin/Tema_Admin'); ?>
  <?= $this->section('content'); ?>

  <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

  <div class="right_col" role="main">
      <div class="card">
          <div class="card-header">
              <h3>Tambah Foto</h3>
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

              <form method="post" action="<?= base_url('/Foto/simpan') ?>">
                  <?= csrf_field(); ?>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Judul</label>
                      <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="judul_foto">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Keterangan Foto</label>
                      <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control" name="ket_foto">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Deskrpsi Foto</label>
                      <div class="col-md-9 col-sm-9 ">
                          <textarea id="editor" class="form-control" name="deskripsi_foto" style='height:260px'></textarea>
                          </div>
                      </div>
                      <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>

                  <div class="form-group row">
                      <label class="col-form-label col-md-3 col-sm-3 ">Pilih file yang ingin diupload</label>
                      <div class="col-md-9 col-sm-9 ">
                          <input type="file" class="form-control" id="contohupload1" name="list_foto">
                      </div>
                  </div>

                  <div class="form-group">
                      <input type="submit" value="Simpan" class="btn btn-info" />
                  </div>
              </form>

          </div>
      </div>
      <?= $this->endSection() ?>