  <?= $this->extend('Admin/Tema_Admin');?>
  <?= $this->section('content'); ?>
  <div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Tag Berita</h3>
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

    <form method="post" action="<?= base_url('/Tag/simpan') ?>">
        <?= csrf_field(); ?>
        
        <div class="form-group">
            <label for="nama">Tag Berita</label>
            <input type="text" class="form-control"  name="list_tag" >
        </div>
        
        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-info" />
        </div>    
    </form>

</div>
</div>
<?= $this->endSection() ?>