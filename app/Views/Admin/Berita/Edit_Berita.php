  <?= $this->extend('Admin/Tema_Admin'); ?>
  <?= $this->section('content'); ?>

  <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

  <div class="right_col" role="main">
      <div class="container">
          <div class="card">
              <div class="card-header">
                  <h3>Update Daftar Berita</h3>
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
                  <form method="post" action="<?= base_url('berita/update/' . $list_berita->id_berita) ?>">
                      <?= csrf_field(); ?>
                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Judul Berita</label>
                          <div class="col-md-9 col-sm-9 ">
                              <input type="text" class="form-control" name="judul_berita"
                                  value="<?= $list_berita->judul_berita; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Alamat</label>
                          <div class="col-md-9 col-sm-9 ">
                              <input type="text" class="form-control" name="sub_judul"
                                  value="<?= $list_berita->tag_berita; ?>" placeholder="Untuk Desa Wisata">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Video Youtube</label>
                          <div class="col-md-9 col-sm-9 ">
                              <input type="text" class="form-control" name="video_youtube"
                                  placeholder='Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU'
                                  value="<?= $list_berita->video_youtube; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Kategori</label>
                          <div class="col-md-9 col-sm-9 ">
                              <select class="form-control" name="id_kategori" value="<?= $list_berita->id_kategori; ?>">
                                  <option value='' selected>- Pilih Kategori -</option>
                                  <option>Nasional</option>
                                  <option>Daerah</option>
                                  <option>Daerah</option>
                                  <option>Jajanan</option>
                                  <option>Tradisi</option>
                                  <option>Permainan Tradisional</option>
                                  <option>Infografis</option>
                                  <option>Desa Wisata</option>
                                  <option>BUM Desa</option>
                                  <option>Kabar Desa</option>
                                  <option>Regulasi - Bum Desa</option>
                                  <option>Dana Desa</option>
                              </select>
                          </div>
                      </div>


                      <!-- <div class="form-group row">
                          <label class="control-label col-md-3 col-sm-3">Headline</label>
                          <div class="col-md-9 col-sm-9 ">
                              <p>
                                  Ya:
                                  <input type="radio" class="flat" name="headline" id="genderM" value="Ya"
                                      value="<?= $list_berita->headline; ?>" checked="" required /> Tidak:
                                  <input type="radio" class="flat" name="headline" id="genderF" value="Tidak"
                                      value="<?= $list_berita->headline; ?>" />
                              </p>
                          </div>
                      </div> -->

                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Pilihan</label>
                          <div class="col-md-9 col-sm-9 ">
                              <p>
                                  Ya:
                                  <input type="radio" class="flat" name="pilihan" id="genderM" value="Ya"
                                      value="<?= $list_berita->pilihan; ?>" checked="" required /> Tidak:
                                  <input type="radio" class="flat" name="pilihan" id="genderF" value="Tidak"
                                      value="<?= $list_berita->pilihan; ?>" />
                              </p>
                          </div>
                      </div>

                      <!-- <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Berita Utama</label>
                          <div class="col-md-9 col-sm-9 ">
                              <p>
                                  Ya:
                                  <input type="radio" class="flat" name="berita_utama" id="genderM" value="Ya"
                                      value="<?= $list_berita->berita_utama; ?>" checked="" required /> Tidak:
                                  <input type="radio" class="flat" name="berita_utama" id="genderF" value="Tidak"
                            <          value="<?= $list_berita->berita_utama; ?>" />
                              </p>
                          </div>
                      </div> -->


                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Isi Berita</label>
                          <div class="col-md-9 col-sm-9 ">
                              <!-- <textarea type="text" class="form-control" name="isi_berita" style='height:260px' value="<?= $list_berita->isi_berita; ?>"
                                > </textarea> -->
                              <textarea id="editor" class="form-control" name="isi_berita" style='height:260px'
                                  value="<?= $list_berita->isi_berita; ?>"></textarea>
                          </div>
                      </div>
                      <style>
                      .ck-editor__editable_inline {
                          min-height: 400px;
                      }
                      </style>
                      <script>
                      ClassicEditor
                          .create(document.querySelector('#editor'))
                          .catch(error => {
                              console.error(error);
                          });
                      </script>

                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3" for="img">Gambar</label>
                          <div class="col-md-9 col-sm-9 ">
                              <input type="file" class="form-control" name="gambar"
                                  value="<?= $list_berita->gambar; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Keterangan Gambar</label>
                          <div class="col-md-9 col-sm-9 ">
                              <input type="text" class="form-control" name="ket_gambar"
                                  value="<?= $list_berita->ket_gambar; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Penulis</label>
                          <div class="col-md-9 col-sm-9 ">
                              <input type="text" class="form-control" name="nama_penulis"
                                  value="<?= $list_berita->nama_penulis; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-form-label col-md-3 col-sm-3 ">Editor</label>
                          <div class="col-md-9 col-sm-9 ">
                              <input type="text" class="form-control" name="nama_editor"
                                  value="<?= $list_berita->nama_editor; ?>">
                          </div>
                      </div>

                      <div class="form-group">
                          <input type="submit" value="Update" class="btn btn-info" />
                      </div>

                  </form>
              </div>
          </div>
      </div>
      <?= $this->endSection() ?>