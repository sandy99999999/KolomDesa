  <?= $this->extend('Admin/Tema_Admin');?>
  <?= $this->section('content'); ?>
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
        
        <div class="form-group">
            <label for="nama">Judul Foto</label>
            <input type="text" class="form-control"  name="nama_foto" >
            
            <label for="contohupload1">Pilih file yang ingin diupload</label>
            <input type="file" class="form-control-file" id="contohupload1" name="list_foto">
        </div>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-info" />
        </div>    
    </form>

</div>
</div>
<?= $this->endSection() ?>