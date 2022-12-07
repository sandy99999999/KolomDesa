<?= $this->extend('Admin/Tema_Admin');?>
<?= $this->section('content'); ?>

<div class="right_col" role="main">
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Berita</h3>
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
            <form method="post" action="<?= base_url('berita/simpan') ?>">
                <?= csrf_field(); ?>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Judul Berita</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="judul_berita" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Sub Judul</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="sub_judul" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Video Youtube</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="video_youtube" placeholder='Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU'>
                    </div>
                </div>
                
                <!-- <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="e" class="form-control" id="kategori">
                     <option value='' selected>- Pilih Kategori -</option>
 -->
                     <!-- <php foreach ($kategori_berita AS $ktg) {
                        echo "<option value=".$ktg->id_kategori.">".$ktg->kategori_berita."</option>";
                     } > -->
               
                    <!-- </select>
                </div> -->

                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Kategori</label>
                    <div class="col-md-9 col-sm-9 ">
                        <select class="form-control" name="id_kategori" >
                            <option value='' selected>- Pilih Kategori -</option>
                            <option>Internasional</option>
                            <option>Nasional</option>
                            <option>Daerah</option>
                            <option>Jajanan</option>
                            <option>Tradisi</option>
                            <option>Analisa</option>
                            <option>Desa_Wisata</option>
                            <option>Tokoh_Desa</option>
                            <option>BUMDesa</option>
                            <option>Kabar_Desa</option>
                        </select>
                    </div>
                </div>

                
                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3">Headline</label>
                        <div class="col-md-9 col-sm-9 ">
                            <p>
                             Ya:
                             <input type="radio" class="flat" name="headline" id="genderM" value="Ya" checked="" required /> Tidak:
                             <input type="radio" class="flat" name="headline" id="genderF" value="Tidak" />
                            </p>
                        </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Pilihan</label>
                        <div class="col-md-9 col-sm-9 ">
                            <p>
                             Ya:
                             <input type="radio" class="flat" name="pilihan" id="genderM" value="Ya" checked="" required /> Tidak:
                             <input type="radio" class="flat" name="pilihan" id="genderF" value="Tidak" />
                            </p>
                        </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Berita Utama</label>
                        <div class="col-md-9 col-sm-9 ">
                            <p>
                             Ya:
                             <input type="radio" class="flat" name="berita_utama" id="genderM" value="Ya" checked="" required /> Tidak:
                             <input type="radio" class="flat" name="berita_utama" id="genderF" value="Tidak" />
                            </p>
                        </div>
                </div>

                
                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Isi Berita</label>
                    <div class="col-md-9 col-sm-9 ">
                    <textarea type="text" class="form-control" name="isi_berita" style='height:260px'> </textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3" for="img">Gambar</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="file" class="form-control" name="gambar" >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 ">Keterangan Gambar</label>
                    <div class="col-md-9 col-sm-9 ">
                        <input type="text" class="form-control" name="ket_gambar" >
                    </div>
                </div>
                        

                <!-- <div class='checkbox-scroll'>Tag<span style='display:block;'>
                        <input type='text' class='form-control' name='l' >
                        <input type=checkbox value='kesehatan' name=j[]> Kesehatan &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='politik' name=j[]> Politik &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='pendidikan' name=j[]> Pendidikan &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='edukasi' name=j[]> Edukasi &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='teknologi' name=j[]> Teknologi &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='tutorial' name=j[]> Tutorial &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='ekonomi' name=j[]> Ekonomi &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='yahudi' name=j[]> Yahudi &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='israel' name=j[]> Israel &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='palestina' name=j[]> Palestina &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='selebritis' name=j[]> Selebritis &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='bola' name=j[]> Bola &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='internasional' name=j[]> Internasional &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='film' name=j[]> Film &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='hukum' name=j[]> Hukum &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='wisata' name=j[]> Wisata &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='teknologi' name=j[]> Teknologi &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='metropolitan' name=j[]> Metropolitan &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='nasional' name=j[]> Nasional &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='kesehatan' name=j[]> Kesehatan &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='olahraga' name=j[]> Olahraga &nbsp; &nbsp; &nbsp; </span><span style='display:block;'>
                        <input type=checkbox value='hiburan' name=j[]> Hiburan &nbsp; &nbsp; &nbsp; </span>
                </div> -->

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-info" />
                </div>
 

            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
