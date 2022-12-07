  <?= $this->extend('Admin/Tema_Admin');?>
     <?= $this->section('content'); ?>
     
<div class="right_col" role="main">
    <div class="card">
        <div class="card-header">
            <h3>Update Kategori Berita</h3>
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
            <form method="post" action="<?= base_url('kategori/update/' . $kategori->id_kategori) ?>">
                <?= csrf_field(); ?>
 
                <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama" name="kategori_berita" value="<?= $kategori->kategori_berita; ?>">
                </div>
 
                
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>
 
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>