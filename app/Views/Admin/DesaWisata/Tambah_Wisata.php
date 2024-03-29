<?= $this->extend('Admin/Tema_Admin'); ?>
<?= $this->section('content'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

<div class="right_col" role="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Wisata</h3>
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
                <form method="post" action="<?= base_url('desawisata/simpan') ?>">
                    <?= csrf_field(); ?>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Nama</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="judul_berita">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Alamat</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="tag_berita">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3">Kategori</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select class="form-control" name="id_kategori">
                                <option value='' selected>- Pilih Kategori -</option>
                                <option>Desa Wisata</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3">Headline</label>
                        <div class="col-md-9 col-sm-9 ">
                            <p>
                                Ya:
                                <input type="radio" class="flat" name="headline" id="genderM" value="Ya" checked=""
                                    required /> Tidak:
                                <input type="radio" class="flat" name="headline" id="genderF" value="Tidak" />
                            </p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Pilihan</label>
                        <div class="col-md-9 col-sm-9 ">
                            <p>
                                Ya:
                                <input type="radio" class="flat" name="pilihan" id="genderM" value="Ya" checked=""
                                    required /> Tidak:
                                <input type="radio" class="flat" name="pilihan" id="genderF" value="Tidak" />
                            </p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Deskripsi</label>
                        <div class="col-md-9 col-sm-9 ">
                            <textarea id="editor" class="form-control" name="isi_berita"
                                style='height:260px'></textarea>
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
                            <input type="file" class="form-control" name="gambar">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Keterangan Gambar</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="ket_gambar">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Tanggal</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="date" class="form-control" name="created_at">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Penulis</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="nama_penulis">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Editor</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="nama_editor">
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-info" />
                    </div>


                </form>
            </div>
        </div>
    </div>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">



                <?= $this->endSection() ?>

                <?= $this->section('script') ?>
                <script src="<?= base_url('ckeditor5/ckeditor.js') ?>" type="text/javascript"></script>

                <script>
                ClassicEditor
                    .create(document.querySelector('#isi_berita'))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
                </script>
                <?= $this->endSection() ?>