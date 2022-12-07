<?= $this->extend('Admin/Tema_Admin'); ?>
<?= $this->section('content'); ?>

<div class="right_col" role="main">

    <div class="card">
        <div class="card-header">
            <h3>Info Iklan</h3>
        </div>
        <div class="card-body">

            <div class="col-lg-6 ">
            </div>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Info Iklan</th>
                    <th>Tanggal Update</th>
                    <th>Aksi</th>
                </tr>

                <?php $no = 1;
                foreach ($Kontributor as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->kontributor; ?></td>
                        <td><?= $row->created_at; ?></td>

                        <td>
                            <a title="Edit" href="<?= base_url("Kontributor/edit/$row->id_web"); ?>" class="btn btn-info fa fa-edit"></a>
                            <!-- <a title="Delete" href="<= base_url("berita/delete/$row->id_web") ?>" class="btn btn-danger fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"></a> -->
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <!-- <= $pager->links('list_berita', 'bootstrap_pagination') ?> -->
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection() ?>