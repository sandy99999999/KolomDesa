  <?= $this->extend('Admin/Tema_Admin');?>

  <?= $this->section('content'); ?>

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Kategori Berita</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Cari !</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">                       
                <div class="card-body">
                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('message'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <a href="<?= base_url('/Tambah_Kategori_Berita'); ?>" class="btn btn-primary">Tambah</a>
                <hr />
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($kategori as $row) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->kategori_berita; ?></td>
                            <td>
                                <a title="Edit" href="<?= base_url("kategori/edit//$row->id_kategori"); ?>" class="btn btn-info">Edit</a>
                                <a title="Delete" href="<?= base_url("kategori/delete/$row->id_kategori") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<!-- /page content -->

<?php $this->endSection()?>