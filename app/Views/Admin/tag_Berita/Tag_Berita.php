     <?= $this->extend('Admin/Tema_Admin');?>
     <?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>List Tag Berita</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/Tambah_Tag'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Tag Berita</th>  
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($tag_berita as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->list_tag; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("Tag/edit//$row->id_tag"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("Tag/delete/$row->id_tag") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                       
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php $this->endSection()?>